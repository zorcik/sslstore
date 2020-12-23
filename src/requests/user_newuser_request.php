<?php

namespace WebLogic\sslstore\requests;

use WebLogic\sslstore\abstractions\baserequest;

class user_newuser_request extends baserequest
{  
   public $Email;
   public $Password;
   public $FirstName;
   public $LastName;
   public $AlternateEmail;
   public $CompanyName;
   public $Street;
   public $CountryName;
   public $State;
   public $City;
   public $Zip;
   public $Phone;
   public $Fax;
   public $Mobile;
   public $UserType;
   public $HearedBy;
}