<?php

use Illuminate\Database\Seeder;
use App\User;
use App\Invoice;
use App\BillingInformation;
use App\Profile;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call('UsersTableSeeder');

        $user = new User();
		$user->username = "admin";
		$user->email = "admin@admin.com";
		$user->password = app('hash')->make("admin@admin.com");
		$user->api_token = "";
		$user->save();

		$faker = Faker\Factory::create("id_ID");

		for ($i=1; $i <= 10 ; $i++) { 
			$username = $faker->userName;

			$user = new User();
			$user->username = $username;
			$user->email = $username . "@" . $username . ".com";
			$user->password = app('hash')->make($username . "@" . $username . ".com");
			$user->api_token = "";
			$user->save();	

			for ($j=1; $j <= 5 ; $j++) { 
				$invoice = new Invoice();
				$invoice->user_id = $user->id;
				$invoice->number = $faker->randomDigit;
				$invoice->date = $faker->dateTime()->format('d-m-Y');
				$invoice->cost = $faker->randomDigit;
				$invoice->payment_method = 'creditcard';
				$invoice->name = $faker->name;
				$invoice->address = $faker->address;
				$invoice->plan_type = 'basic';
				$invoice->text = 'this a a fake account for testing';
				$invoice->due_date = $faker->dateTime()->format('d-m-Y');
				$invoice->status = 1;
				$invoice->save();	
			}
			$billing_information = new BillingInformation();
            $billing_information->user_id = $user->id;
            $billing_information->name = $faker->name;
            $billing_information->address = $faker->address;
            $billing_information->payment_method = 'creditcard';
            $billing_information->area_of_business = 'healthcare';
			$billing_information->plan_type = 'basic';
			$billing_information->save();	
			
			$profile = new profile();
            $profile->user_id = $user->id;
            $profile->language = 'en';
            $profile->currency = 'Euro';
            $profile->timezone = $faker->dateTime()->format('d-m-Y');
            $profile->logo_img = $faker->imageUrl($width = 200, $height = 200);
			$profile->save();	

		}
    }
}
