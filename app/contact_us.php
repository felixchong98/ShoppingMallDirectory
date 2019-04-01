<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contact_us extends Model
{
  /**
   * The attributes that are mass assignable.
   *
   * @var array
   */
   public $table = "contact_us";
   protected $fillable = [
     'id',
     'subject',
     'salutation',
     'fullName',
     'email',
     'contactNo',
     'feedback'
   ];
}
