<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model {

	/**
       * The table associated with the model.
       *
       * @var string
       */
      protected $table = 'articles';
  
      /**
       * The attributes that are mass assignable.
       *
       * @var array
       */
      protected $fillable = ['title', 'body'];
}
