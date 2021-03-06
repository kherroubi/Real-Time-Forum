<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Reply;
use Faker\Generator as Faker;
use App\Question;
use App\User;

$factory->define(Reply::class, function (Faker $faker) {
    return [
        'content'		=>	$faker->text,
        'question_id'	=>	function(){
        	return Question::all()->random();
        },
        'user_id'	=>	function(){
        	return User::all()->random();
        }
    ];
});
