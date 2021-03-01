<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class main extends CI_Controller {

/**
* Index Page for this controller.
*
* Maps to the following URL
* http://example.com/index.php/welcome
* - or -
* http://example.com/index.php/welcome/index
* - or -
* Since this controller is set as the default controller in
* config/routes.php, it's displayed at http://example.com/
*
* So any other public methods not prefixed with an underscore will
* map to /index.php/welcome/<method_name>
* @see https://codeigniter.com/user_guide/general/urls.html
*/
//view index page
public function index ()
{
      $this->load->view('index');
}
//view register
public function register()
{
      $this->load->view('register');
}
//view customer home
public function adminhome()
{
      $this->load->view('adminhome');
}
//view admin home
public function userhome()
{
      $this->load->view('userhome');
}

//registration action
public function regaction()
      {
      $this->load->library('form_validation');
      $this->form_validation->set_rules("fname","fname",'required');
      $this->form_validation->set_rules("lname","lname",'required');
      $this->form_validation->set_rules("age","age",'required');
      $this->form_validation->set_rules("gender","gender",'required');
      $this->form_validation->set_rules("address","address",'required');
      $this->form_validation->set_rules("phno","phno",'required');
      $this->form_validation->set_rules("email","email",'required');
      $this->form_validation->set_rules("password","password",'required');
      if($this->form_validation->run())
      {
      $this->load->model('mainmodel');
      $pass=$this->input->post('password');
      $encpass=$this->mainmodel->encpaswd($pass);
      $a=array("fname"=>$this->input->post("fname"),
      "lname"=>$this->input->post("lname"),
      "age"=>$this->input->post("age"),
      "gender"=>$this->input->post("gender"),
      "address"=>$this->input->post("address"),
      "phno"=>$this->input->post("phno"));
      $b=array("email"=>$this->input->post("email"),
      "password"=>$encpass,"utype"=>'1');
      $this->mainmodel->regaction($a,$b);
      redirect(base_url().'main/register');

      }
   }
   //login action
   public function techlog()
    {
    $this->load->library('form_validation');
    $this->form_validation->set_rules("email","email",'required');
    $this->form_validation->set_rules("password","password",'required');
    if($this->form_validation->run())
    {

    $this->load->model('mainmodel');
    $email=$this->input->post("email");
    $pass=$this->input->post("password");
    $rslt=$this->mainmodel->selectpass($email,$pass);
    if($rslt)
    {
    $id=$this->mainmodel->getuserid($email);
    $user=$this->mainmodel->getuser($id);
    $this->load->library(array('session'));
    $this->session->set_userdata(array('id'=>(int)$user->id,'utype'=>$user->utype));

    if($_SESSION['utype']=='0')
    {
    redirect(base_url().'main/adminhome');
    }
    elseif ($_SESSION['utype']=='1')
    {
    redirect(base_url().'main/userhome');
    }

    else
    {
    echo"invalid user";
    }
    }

    }
    }
//update details
public function addairlinedetail()
    {
       $this->load->view('addairlinedetail');
    }
public function airlineaction()
    {
    $this->load->library('form_validation');
    $this->form_validation->set_rules("flightno","number",'required');
    $this->form_validation->set_rules("flightname","name",'required');
    $this->form_validation->set_rules("departureairport","airport",'required');
    $this->form_validation->set_rules("departuretime","time",'required');
    $this->form_validation->set_rules("departuredate","time",'required');
    $this->form_validation->set_rules("arrivalairport","airport",'required');
    $this->form_validation->set_rules("arrivaltime","time",'required');
    $this->form_validation->set_rules("arrivaldate","time",'required');
    $this->form_validation->set_rules("economycapacity","capacity",'required');
    $this->form_validation->set_rules("economyprice","price",'required');
    $this->form_validation->set_rules("bussinesscapacity","capacity",'required');
    $this->form_validation->set_rules("bussinessprice","time",'required');
    if($this->form_validation->run())
    {
      $this->load->model('mainmodel');
      $a=array("flightno"=>$this->input->post("flightno"),
           "flightname"=>$this->input->post("flightname"),
           "departureairport"=>$this->input->post("departureairport"),
           "departuretime"=>$this->input->post("departuretime"),
           "departuredate"=>$this->input->post("departuredate"),
           "arrivalairport"=>$this->input->post("arrivalairport"),
           "arrivaltime"=>$this->input->post("arrivaltime"),
           "arrivaldate"=>$this->input->post("arrivaldate"),
           "economycapacity"=>$this->input->post("economycapacity"),
           "economyprice"=>$this->input->post("economyprice"),
           "bussinesscapacity"=>$this->input->post("bussinesscapacity"),
           "bussinessprice"=>$this->input->post("bussinessprice"));
        $this->mainmodel->airlineaction($a);
        redirect(base_url().'main/addairlinedetail');
    }
  }
//view  airline
public function tab()
{
  $this->load->model('mainmodel');
  $data['n']=$this->mainmodel->tab();
  $this->load->view('viewairlineadd',$data);
}

// delete details
public function deletedetails()
 {
  $this->load->model("mainmodel");
  $id=$this->uri->segment(3);
  $this->mainmodel->deletedetails($id);
  redirect('main/tab','refresh');
 }

// view user
public function userview()
{
  $this->load->model('mainmodel');
  $data['n']=$this->mainmodel->userview();
  $this->load->view('viewuser',$data);
}
// public function updateprofile()
// {
//   $this->load->view('updateprofile');
// }

public function edit()
{
   
    $this->load->model('mainmodel');    
    $id=$this->session->id;
    $data['user_data']=$this->mainmodel->edit($id);
    $this->load->view('updateprofile',$data);
}

public function updatedetail()
{
    $a=array("fname"=>$this->input->post("fname"),
                  "lname"=>$this->input->post("lname"),
                  "age"=>$this->input->post("age"),
                  "gender"=>$this->input->post("gender"),
                  "address"=>$this->input->post("address"),
                  "phno"=>$this->input->post("phno"));
    $b=array("email"=>$this->input->post("email"));
    $this->load->model('mainmodel');

    if($this->input->post("update"))
    {
        $id=$this->session->id;
        $this->mainmodel->updatedetail1($a,$b,$id);
        redirect('main/edit','refresh');

    }
}
//book
public function booking()
  {
  $this->load->view('booking');
  }
//booking form load
//action id passing for booking
public function bookaction()
  {
    $this->load->model('mainmodel');
    $id=$this->session->id;
    $data['n']=$this->mainmodel->update($id);
    $this->load->view('bookform',$data);
  }

  public function book()
    {
      $this->load->model('mainmodel');
      $data['n']=$this->mainmodel->book();
      $this->load->view('booking',$data);
    }
public function searchflight()
    {
        $this->load->view('index');
    }
    public function searchaction()
    {
        $this->load->model('mainmodel');
        $d=date('y-m-d');
        $this->mainmodel->deletedate($d);
        $dep=$this->input->post("departureairport");
        $arr=$this->input->post("arrivalairport");
        $depdate=$this->input->post("departuredate");
        //echo"$depdate";exit;
        $data['n']=$this->mainmodel->searchview($dep,$arr,$depdate);

        $this->load->view('searchview',$data);

    }
    public function search()
    {
      $this->load->model('mainmodel');
      $data['n']=$this->mainmodel->search();
      $this->load->view('searchview',$data);
    }
    public function update()
    {
      $this->load->model('mainmodel');
      $id=$this->uri->segment(3);
      $data['user_data']=$this->mainmodel->update($id);
      $this->load->view('airlineformedit',$data);
    }

/*public function airupdate()
{
   $this->load->model('mainmodel');    
  $id=$this->uri->segment(3);
    $data['user_data']=$this->mainmodel->airupdate($id);
    $this->load->view('airlineformedit',$data);
}*/
  public function updateairlineaction()
    {
     $this->load->model('mainmodel');
      $a=array("flightno"=>$this->input->post("flightno"),
           "flightname"=>$this->input->post("flightname"),
           "departureairport"=>$this->input->post("departureairport"),
           "departuretime"=>$this->input->post("departuretime"),
           "departuredate"=>$this->input->post("departuredate"),
           "arrivalairport"=>$this->input->post("arrivalairport"),
           "arrivaltime"=>$this->input->post("arrivaltime"),
           "arrivaldate"=>$this->input->post("arrivaldate"),
           "economycapacity"=>$this->input->post("economycapacity"),
           "economyprice"=>$this->input->post("economyprice"),
           "bussinesscapacity"=>$this->input->post("bussinesscapacity"),
           "bussinessprice"=>$this->input->post("bussinessprice"));

             if($this->input->post("update"))
           {
            $id=$this->input->post("id");
            //$id=$this->session->id;
            $this->mainmodel->updateairdetail($a,$id);
            redirect('main/tab','refresh');
           }
      }

      //notification
public function notification()

{
$this->load->model('mainmodel');
$data['n']=$this->mainmodel->flightname();
$this->load->view('notification',$data);
}

public function notify_action()
{
$this->load->library('form_validation');
$this->form_validation->set_rules("noti","notification",'required');
if($this->form_validation->run())
{

$this->load->model('mainmodel');
$n=array("notification"=>$this->input->post("noti"),"flight"=>$this->input->post("flight"),"currentdate"=>date('y-m-d'));
$this->mainmodel->notify_action($n);
redirect('main/notification','refresh');
}
}
//userviewing notification

public function notifview()
{ 
  $this->load->model('mainmodel');
  $data['n']=$this->mainmodel->noti();
  $this->load->view('adminviewnot',$data);
}

// public function notifview()
// {
// $this->load->model('mainmodel');
// $data['n']=$this->mainmodel->notify_action($n);
// $this->load->view('adminviewnot',$data);
// }
// }
  public function bookform()
  {
    $this->load->model('mainmodel');
    $id=$_SESSION['flid'];
    $uid=$_SESSION['id'];

    $data['n']=$this->mainmodel->dataf($id);
    $data['m']=$this->mainmodel->datau($uid);

  $this->load->view('bookform',$data);

  }
  public function bookformaction()
    {
   //  $this->load->library('form_validation');
   //  $this->form_validation->set_rules("flightno","flightno",'required');
   //  $this->form_validation->set_rules("flightname","flightname",'required');
   //  $this->form_validation->set_rules("departureairport","airport",'required');
   //  $this->form_validation->set_rules("departuredate","date",'required');
   //  $this->form_validation->set_rules("departuretime","time",'required');
   //  $this->form_validation->set_rules("arrivalairport","airport",'required');
   //  $this->form_validation->set_rules("class","class",'required');
   //  $this->form_validation->set_rules("name","name",'required');
   //  $this->form_validation->set_rules("age","age",'required');
   //  $this->form_validation->set_rules("gender","gender",'required');
   //  $this->form_validation->set_rules("phno","phno",'required');
   //  $this->form_validation->set_rules("email","email",'required');
 
   // if($this->form_validation->run())
   //  {
   //    $this->load->model('mainmodel');
   //    $a=array("flightno"=>$this->input->post("flightno"),
   //        "flightname"=>$this->input->post("flightname"),
   //        "departureairport"=>$this->input->post("departureairport"),
   //        "departuredate"=>$this->input->post("departuredate"),
   //        "departuretime"=>$this->input->post("departuretime"),
   //       "arrivalairport"=>$this->input->post("arrivalairport"),
   //       "class"=>$this->input->post("class"),
   //       "name"=>$this->input->post("name"),
   //       "age"=>$this->input->post("age"),
   //       "gender"=>$this->input->post("gender"),
   //       "phno"=>$this->input->post("phno"),
   //       "email"=>$this->input->post("email"));
        $seat=$this->input->post("class");

          $this->load->library(array('session'));
          $array=array('seat'=>$seat);
          $this->session->set_userdata($array);
          redirect(base_url().'main/bookcost');
        }
        public function bookcost()
        { 
         $uid=$_SESSION['id'];
         $data['s']=$_SESSION['seat'];
         $id=$_SESSION['flid'];
         $this->load->model('mainmodel');
    

    $data['n']=$this->mainmodel->dataf($id);
          $data['m']=$this->mainmodel->datau($uid);
        //$this->mainmodel->bookformaction($a);

        //redirect(base_url().'main/bookform');
        $this->load->view('concession',$data);
          
    
  }
//admin book form view
  public function viewform()
{
  $this->load->model('mainmodel');
  $data['n']=$this->mainmodel->viewform();
  $this->load->view('viewbookform',$data);
}
//session for flight id
public function idsave()
{
  $id

  =$this->uri->segment(3);
  $this->load->library(array('session'));
  $newarray=array('flid'=>$id);
  $this->session->set_userdata($newarray);
  // $a=$_SESSION['flid'];
  // echo $a;
 redirect(base_url().'main/bookform');

}

//main payment
public function pay()
{
$returnURL = base_url().'main/'; //payment success url
      $cancelURL = base_url().'main/cancel'; //payment cancel url
    $notifyURL = base_url().'main/ipn'; //ipn url
//$this->load->view('product');
$this->load->library('Paypal_lib');
$this->paypal_lib->add_field('return', $returnURL);
    $this->paypal_lib->add_field('cancel_return', $cancelURL);
$this->paypal_lib->add_field('userid',"4");
$this->paypal_lib->add_field('bookingid',"15");
$this->paypal_lib->add_field('amount',"4000");
$this->paypal_lib->paypal_auto_form();
// $qry=$this->db->query("select * from booking where email= $email;");
// print_r($qry);
}
public function success()
  {
  $this->load->view('success');
  }
  public function cancel()
  {
  $this->load->view('cancel');
  }

///file upload

  public function file()
        {
        $this->load->view('fileupload');
        }
public function fileupload()
{

  $config['upload_path']='./upload/success';
  $config['allowed_types']='gif|png|jpg|pdf|doc';
  $config['max_size']=1000;
       $config['max_height']=1000;
       $config['max_width']=700;
       $this->load->library('upload',$config);
       if (!$this->upload->do_upload('file'))
       {
        $error=array('error'=>$this->upload->display_errors());
        print_r($error);

       }
       else
       {
        $data=array('file'=>$this->upload->data());
        $img=$data['file']['file_name'];
       }
       $a=array('file'=>$img);
       $this->load->model('mainmodel');
       $this->mainmodel->fileupload($a);
       redirect('main/file','refresh');
     

}

        public function report()
        {
        $this->load->model('mainmodel');
   $data['n']=$this->mainmodel->report();
$this->load->view('viewfile',$data);
        }




}

