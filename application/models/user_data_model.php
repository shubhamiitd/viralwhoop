<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

/**
 * Users
 *
 * This model represents user authentication data. It operates the following tables:
 * - user account data,
 * - user profiles
 *
 * @package	Tank_auth
 * @author	Ilya Konyukhov (http://konyukhov.com/soft/)
 */
class User_data_model extends CI_Model
{

				public	function __construct()
					{
						parent::__construct();
						$this->load->database();
				        $this->main_table = "users";
				        $this->data_table = "users_data";
				        $this->earlier_payments_table = "earlier_payments";
				        $this->posts = "posts";
					}
					public function get_pending_users(){
						$this->db->select("id, username, email, status, ban_reason, created, premium");
						$this->db->where("status", "pending");
						$query = $this->db->get($this->main_table);
						$result = $query->result_array();
						if (sizeof($result)) {
								$i=0;
								while($i<sizeof($result)){
									$this->db->select("user_id, admin, fb_id, fb_pages, account_no, account_holder_name, bank_ifsc, pancard_no, phone");
									$this->db->where("user_id", $result[$i]['id']);
									$query = $this->db->get($this->data_table);
									$result1 = $query->result_array();
									$result2=$result1[0];
									$result[$i]=array_merge($result[$i],$result2);
									$i=$i+1;
								}


							Return $result;
						}
						Return NULL;
					}

					public function get_approved_users(){

							$this->db->select("id, username, email, status, ban_reason, created, premium");
							$this->db->where("status", "approved");
							$query = $this->db->get($this->main_table);
							$result = $query->result_array();
							$completeuser=array();
							if (sizeof($result)) {
									$i=0;
									while($i<sizeof($result)){
										$this->db->select("user_id, admin, fb_id, fb_pages, account_no, account_holder_name, bank_ifsc, pancard_no, phone");
										$this->db->where("user_id", $result[$i]['id']);
										$query = $this->db->get($this->data_table);
										$result1 = $query->result_array();
										$result2=$result1[0];
										$result[$i]=array_merge($result[$i],$result2);
										echo('<br>');
										$i=$i+1;
									}
								Return $result;
							}
							Return NULL;

					}
					public function get_all_users(){

							$this->db->select("id, username, email, status, ban_reason, created, premium");
							$query = $this->db->get($this->main_table);
							$result = $query->result_array();
							if (sizeof($result)) {
									$i=0;
									while($i<sizeof($result)){
										$this->db->select("user_id, admin, fb_id, fb_pages, account_no, account_holder_name, bank_ifsc, pancard_no, phone");
										$this->db->where("user_id", $result[$i]['id']);
										$query = $this->db->get($this->data_table);
										$result1 = $query->result_array();
										$result2=$result1[0];
										$result[$i]=array_merge($result[$i],$result2);
										$i=$i+1;
									}


								Return $result;
							}
							Return NULL;

					}
					public function set_user_status($user_id){
						$this->db->update($this->main_table, array(
										"user_id" => $id,
										"fb_id" => $data['fb_id'],
										"fb_pages" => $data['fb_pages'],
										"phone" => $data['phone'],
										"account_no" => 'none',
										"account_holder_name" =>'none',
										"bank_ifsc" =>'none',
										"pancard_no" => 'none',
								));
									Return NULL;
					}
					public	function set_user($id,$data){

									$this->db->insert($this->data_table, array(
					                "user_id" => $id,
					                "fb_id" => $data['fb_id'],
					                "fb_pages" => $data['fb_pages'],
					                "phone" => $data['phone'],
					                "account_no" => 'none',
					                "account_holder_name" =>'none',
					                "bank_ifsc" =>'none',
					                "pancard_no" => 'none',
					            ));
												Return NULL;
											}

					public	function update_user_data($id,$category,$data){

					        $this->db->where('user_id', $id);
									$this->db->update($this->data_table, array($category => $data));
									Return NULL;
											}
					public function getuserid($user_id)
						    {
						        $this->db->select("id, username, email, status, ban_reason, created, premium");
						        $this->db->where("id", $user_id);
						        $query = $this->db->get($this->main_table);
						        $result = $query->result_array();
						        if (sizeof($result)) {
						            return $result[0];
						        }
						        return null;
						    }
					public	function get_user($id){
								$completeuser=$this->getuserid($id);
											if ($this->getuserid($id)){
												$this->db->select("user_id, admin, status, fb_id, fb_pages, account_no, account_holder_name, bank_ifsc, pancard_no, phone");
						            $this->db->where("user_id", $id);
						            $query = $this->db->get($this->data_table);
												$result = $query->result_array();
												return $result[0];
											}
												return Null;

											}
						public function get_user_data($id,$category){
								$user_data=$this->getuserid($id);
											if ($this->getuserid($id)){
												$this->db->select($category);
						            $this->db->where("user_id", $id);
						            $query = $this->db->get($this->data_table);
												$result = $query->result_array();
												return $result;
											}
												return Null;
							}
							public function get_user_earlier_payments($id){
										$user_data=$this->getuserid($id);
													if ($this->getuserid($id)){
														$this->db->select("id, amount, date");
								            $this->db->where("id", $id);
														$this->db->order_by("date","desc");
								            $query = $this->db->get($this->earlier_payments_table);
														$result = $query->result_array();
														return $result;
													}
														return Null;
									}
							public function get_posts()
							{
																$this->db->select("post_id,category,title,image-link,post-link");
										            //$this->db->where("category", $category);
										            $query = $this->db->get($this->posts);
																$result = $query->result_array();
																return $result;

							}
							public function get_all_users_metas()
							{
								$this->db->select("user_id, status, fb_id, fb_pages, account_no, account_holder_name, bank_ifsc, pancard_no, phone");
								$query = $this->db->get($this->data_table);
								$result = $query->result_array();
								return $result;

							}
							public function get_all_users_data()
							{
								$this->db->select("id, username, email, status, ban_reason, created, premium");
								$query = $this->db->get($this->main_table);
								$result = $query->result_array();
								return $result;

							}




}
?>
