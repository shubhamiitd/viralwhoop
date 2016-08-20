<?php if (!defined('BASEPATH')) exit('No direct script access allowed');


$ci = &get_instance();
$ci->load->library('google');

function getService($service_account_email, $key_file_location)
{
    $key_file_location = APPPATH."../resources/keys/".$key_file_location;

    // Create and configure a new client object.
    $client = new Google_Client();
    $client->setApplicationName("HelloAnalytics");
    $analytics = new Google_Service_Analytics($client);

    // Read the generated client_secrets.p12 key.
    $key = file_get_contents($key_file_location);
    $cred = new Google_Auth_AssertionCredentials(
        $service_account_email,
        array(Google_Service_Analytics::ANALYTICS_READONLY),
        $key
    );
    $client->setAssertionCredentials($cred);
    if($client->getAuth()->isAccessTokenExpired()) {
        $client->getAuth()->refreshTokenWithAssertion($cred);
    }

    return $analytics;
}

function getFirstProfileId(&$analytics) {
  // Get the user's first view (profile) ID.

  // Get the list of accounts for the authorized user.
  $accounts = $analytics->management_accounts->listManagementAccounts();

  if (count($accounts->getItems()) > 0) {
    $items = $accounts->getItems();
    $firstAccountId = $items[0]->getId();

    // Get the list of properties for the authorized user.
    $properties = $analytics->management_webproperties
        ->listManagementWebproperties($firstAccountId);

    if (count($properties->getItems()) > 0) {
      $items = $properties->getItems();
      $firstPropertyId = $items[0]->getId();

      // Get the list of views (profiles) for the authorized user.
      $profiles = $analytics->management_profiles
          ->listManagementProfiles($firstAccountId, $firstPropertyId);

      if (count($profiles->getItems()) > 0) {
        $items = $profiles->getItems();

        // Return the first view (profile) ID.
        return $items[0]->getId();

      } else {
        throw new Exception('No views (profiles) found for this user.');
      }
    } else {
      throw new Exception('No properties found for this user.');
    }
  } else {
    throw new Exception('No accounts found for this user.');
  }
}

function getResults($analytics, $profileId,$postid,$user_id) {
  // Calls the Core Reporting API and queries for the number of sessions
  // for the last seven days.
  $optParams = array(
        'filters' => 'ga:pagePath=@'.'/archives/'.$postid.'?uid=$'.$user_id.'',
    );
   return $analytics->data_ga->get(
       'ga:' . $profileId,
       '60daysAgo',
       'today',
       'ga:sessions',
        $optParams);
}

function printResults($results) {
  // Parses the response from the Core Reporting API and prints
  // the profile name and total sessions.
  if (count($results->getRows()) > 0) {

    // Get the profile name.
    $profileName = $results->getProfileInfo()->getProfileName();

    // Get the entry for the first entry in the first row.
    $rows = $results->getRows();
    $sessions = $rows[0][0];

    // Print the results.
    print "First view (profile) found: $profileName\n";
    print "Total sessions: $sessions\n";
  } else {
    print "No results found.\n";
  }
}
