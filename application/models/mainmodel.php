<?php
class mainmodel extends CI_model
{
//insert to register table
public function regaction($a,$b)
{
$this->db->insert("login",$b);
$userid=$this->db->insert_id();
$a["loginid"]=$userid;
$this->db->insert("register",$a);
}

public function encpaswd($pass)
{
return password_hash($pass,PASSWORD_BCRYPT);
}

public function getuserid($email)
{
$this->db->select('id');
$this->db->from("login");
$this->db->where("email",$email);
return $this->db->get()->row('id');
}
public function getuser($id)
{
$this->db->select('*');
$this->db->from("login");
$this->db->where("id",$id);
return $this->db->get()->row();
}

public function selectpass($email,$pass)
{
$this->db->select('password');
$this->db->from("login");
$this->db->where("email",$email);
$qry=$this->db->get()->row('password');
return $this->verifypass($pass,$qry);
}
public function verifypass($pass,$qry)
{
return password_verify($pass,$qry);
}
public function airlineaction($a)
{
$this->db->insert("airlinedetail",$a);
}


public function tab()
{
//$this->db->select('*');
$qry=$this->db->get("airlinedetail");
return $qry;
}

public function singledata($id)
{
$this->db->select('*');
$this->db->where("id",$id);
$qry=$this->db->get("airlinedetail");
return $qry;
}
public function singleselect()
{
$qry=$this->db->get("airlinedetail");
return $qry;
}
public function deletedetails($id)
{
$this->db->where('id',$id);
$this->db->delete("airlinedetail");
}
public function userview()
{
//$this->db->select('*');
$this->db->select('*');
  $this->db->join('login','login.id=register.loginid','inner');
  $qry=$this->db->get("register");
  return $qry;
}

public function usingledata($id)
{
$this->db->select('*');
$this->db->where("id",$id);
$qry=$this->db->get("register");
return $qry;
}
public function usingleselect()
{
$qry=$this->db->get("register");
return $qry;
}

public function edit($id)
{
  $this->db->select('*');
  $qry=$this->db->join('login','login.id=register.loginid','inner');
  $qry=$this->db->where("register.loginid",$id);
  $qry=$this->db->get("register");
  return $qry;
}

public function updatedetail1($a,$b,$id)
{
$this->db->select('*');
$qry=$this->db->where("loginid",$id);
$qry=$this->db->join('register','login.id=register.loginid','inner');
$qry=$this->db->update("register",$a);
$qry=$this->db->where("login.id",$id);
$qry=$this->db->update("login",$b);
        return $qry;
}
public function bookformaction($a)
{
$this->db->insert("booking",$a);
}
public function book()
{
//$this->db->select('*');
$qry=$this->db->get("airlinedetail");
return $qry;
}


public function deletedate($d)
{
$this->db->where('departuredate<',$d);
$this->db->delete("airlinedetail");
}
public function search()
{
   $this->db->select('*');
   $qry=$this->db->get("airlinedetail");
   return $qry;
}
public function searchview($dep,$arr,$depdate)
{
$this->db->select('*');
$this->db->from('airlinedetail');
$this->db->where("departureairport",$dep);
$this->db->where("arrivalairport",$arr);
$this->db->where("departuredate",$depdate);
$qry=$this->db->get();
return $qry;
}
public function update($id)
{
$this->db->select('*');
$this->db->where("id",$id);
$qry=$this->db->get("airlinedetail");
return $qry;
}
public function updateairdetail($a,$id)
{
      $this->db->select('*');
     $this->db->where("id",$id);
     $qry=$this->db->update("airlinedetail",$a);
     return $qry;

}
public function flightname()
{
$this->db->select('*');
$qry=$this->db->get("airlinedetail");
return $qry;

}

public function notify(){    
     
    $this->db->select('*');
$this->db->join('register','notification.id=register.loginid','inner');
$qry=$this->db->get("notification");
return $qry;  
  }    
public function notify_action($n)
{
  $this->db->insert("notification",$n);
}
public function noti()
{
  $this->db->select('*');
  $qry=$this->db->get("notification");
  return $qry;
}

public function viewform()
{
  //$this->db->select('*');
  $qry=$this->db->get("booking");
  return $qry;
	}

  public function dataf($flid)
{
  $qry=$this->db->select('*');
  
  $qry=$this->db->where('id',$flid);
  $qry=$this->db->get("airlinedetail");
  return $qry;
  }

public function datau($id)
{
  $qry=$this->db->select('*');
  $qry=$this->db->where('id',$id);
  $qry=$this->db->get("register");

  return $qry;
  }
///fileupload
  public function fileupload($a)

{

$this->db->insert("fileupload",$a);


}
public function report()
{

$this->db->select('*');
$qry=$this->db->get("fileupload");
return $qry;


}


}
?>
