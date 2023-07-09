<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class VisualizationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        DB::table('visualizations')->insert([
            'name' => 'All',
            'slug' => 'all',
            'interest_by_region' => null,
            'interest_over_time' => '/InterestOverTime/All Interest Rate based on Interval (8 Window Smooting).html',
            'related_queries' => null,
            'min_interest' => 3,
            'max_interest' => 100
        ]);
        DB::table('visualizations')->insert([
            'name' => 'Blogging',
            'slug' => 'blogging',
            'interest_by_region' => '/InterestByRegion/Interest in Blogging by Country.html',
            'interest_over_time' => '/InterestOverTime/Interest Rate with Time for Blogging.html',
            'related_queries' => '/RelatedQueries/WordCloud_Blogging.png',
            'min_interest' => 60,
            'max_interest' => 100,
            'min_date' => '2018-06-10',
            'max_date' => '2020-07-19'
        ]);
        DB::table('visualizations')->insert([
            'name' => 'Dog Walking',
            'slug' => 'dog-walking',
            'interest_by_region' => '/InterestByRegion/Interest in Dog Walking by Country.html',
            'interest_over_time' => '/InterestOverTime/Interest Rate with Time for Dog Walking.html',
            'related_queries' => '/RelatedQueries/WordCloud_DogWalking.png',
            'min_interest' => 44,
            'max_interest' => 100,
            'min_date' => '2021-12-19',
            'max_date' => '2020-03-22',
        ]);
        DB::table('visualizations')->insert([
            'name' => 'Dropshipping Business',
            'slug' => 'dropshipping-business',
            'interest_by_region' => '/InterestByRegion/Interest in Dropshipping Business by Country.html',
            'interest_over_time' => '/InterestOverTime/Interest Rate with Time for Dropshipping Business.html',
            'related_queries' => '/RelatedQueries/WordCloud_DropshippingBusiness.png',
            'min_interest' => 9,
            'max_interest' => 100,
            'min_date' => '2019-07-21',
            'max_date' => '2023-01-01',
        ]);
        DB::table('visualizations')->insert([
            'name' => 'Elderly Care',
            'slug' => 'elderly-care',
            'interest_by_region' => '/InterestByRegion/Interest in Elderly Care by Country.html',
            'interest_over_time' => '/InterestOverTime/Interest Rate with Time for Elderly Care.html',
            'related_queries' => '/RelatedQueries/WordCloud_ElderlyCare.png',
            'min_interest' => 41,
            'max_interest' => 100,
            'min_date' => '2021-12-19',
            'max_date' => '2020-03-15',
        ]);
        DB::table('visualizations')->insert([
            'name' => 'Freelancing',
            'slug' => 'freelancing',
            'interest_by_region' => '/InterestByRegion/Interest in Freelancing by Country.html',
            'interest_over_time' => '/InterestOverTime/Interest Rate with Time for Freelancing.html',
            'related_queries' => '/RelatedQueries/WordCloud_Freelancing.png',
            'min_interest' => 20,
            'max_interest' => 100,
            'min_date' => '2018-12-02',
            'max_date' => '2023-06-04',
        ]);
        DB::table('visualizations')->insert([
            'name' => 'Influencer Marketing',
            'slug' => 'influencer-marketing',
            'interest_by_region' => '/InterestByRegion/Interest in Influencer Marketing by Country.html',
            'interest_over_time' => '/InterestOverTime/Interest Rate with Time for Influencer Marketing.html',
            'related_queries' => '/RelatedQueries/WordCloud_InfluencerMarketing.png',
            'min_interest' => 30,
            'max_interest' => 100,
            'min_date' => '2018-12-23',
            'max_date' => '2020-05-24',
        ]);
        DB::table('visualizations')->insert([
            'name' => 'Local Sales',
            'slug' => 'local-sales/',
            'interest_by_region' => '/InterestByRegion/Interest in Local Sales by Country.html',
            'interest_over_time' => '/InterestOverTime/Interest Rate with Time for Local Sales.html',
            'related_queries' => '/RelatedQueries/WordCloud_LocalSales.png',
            'min_interest' => 28,
            'max_interest' => 100,
            'min_date' => '2022-12-25',
            'max_date' => '2022-04-10',
        ]);
        DB::table('visualizations')->insert([
            'name' => 'Personal Assistant',
            'slug' => 'personal-assistant',
            'interest_by_region' => '/InterestByRegion/Interest in Personal Assistant by Country.html',
            'interest_over_time' => '/InterestOverTime/Interest Rate with Time for Personal Assistant.html',
            'related_queries' => '/RelatedQueries/WordCloud_PersonalAssistant.png',
            'min_interest' => 39,
            'max_interest' => 100,
            'min_date' => '2021-12-19',
            'max_date' => '2019-08-25',
        ]);
        DB::table('visualizations')->insert([
            'name' => 'Virtual Assistant',
            'slug' => 'virtual-assistant',
            'interest_by_region' => '/InterestByRegion/Interest in Virtual Assistant by Country.html',
            'interest_over_time' => '/InterestOverTime/Interest Rate with Time for Virtual Assistant.html',
            'related_queries' => '/RelatedQueries/WordCloud_VirtualAssistant.png',
            'min_interest' => 3,
            'max_interest' => 100,
            'min_date' => '2018-11-18',
            'max_date' => '2021-05-30',
        ]);
        DB::table('visualizations')->insert([
            'name' => 'YouTube Channel',
            'slug' => 'youTube-channel',
            'interest_by_region' => '/InterestByRegion/Interest in YouTube Channel by Country.html',
            'interest_over_time' => '/InterestOverTime/Interest Rate with Time for YouTube Channel.html',
            'related_queries' => '/RelatedQueries/WordCloud_YoutubeChannel.png',
            'min_interest' => 37,
            'max_interest' => 100,
            'min_date' => '2018-06-17',
            'max_date' => '2020-05-10',
        ]);
    }
}
