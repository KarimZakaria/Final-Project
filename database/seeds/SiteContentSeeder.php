<?php

use Illuminate\Database\Seeder;
use App\siteContent ; 

class SiteContentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        siteContent::create([
           'name'=> 'banner' ,
           'content'=> json_encode([
            'title' =>'EVERY Student YEARNS TO LEARN' ,
            'subtitles' =>'Making Your Skills World Better',
            'desc' =>"Replenish seasons may male hath fruit beast were seas saw you arrie said man beast whales his void unto last session for bite. Set have great you'll male grass yielding yielding man" ,

            ]) ,
        ]) ;
        siteContent::create([
        'name'=> 'courses' ,
        'content'=> json_encode([
        'title' =>'Our Courses' ,
        'subtitles' =>'Different Categories',
            ]) ,
        ]) ; 

        siteContent::create([
            'name'=> 'features' ,
            'content'=> json_encode([
            'desc' => "Set have great you male grass yielding an yielding first their you're have called the abundantly fruit were together" ,
                ]) ,
            ]) ; 
    }
}
