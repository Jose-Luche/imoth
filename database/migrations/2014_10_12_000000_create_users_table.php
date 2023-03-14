<?php

use App\Models\User;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->boolean('super_admin')->nullable()->default(false);
            $table->string('name')->nullable();
            $table->string('account_type')->nullable();
            $table->string('mobile')->nullable();
            $table->string('code')->nullable();
            $table->string('email')->unique()->nullable();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password')->nullable();
            $table->rememberToken()->nullable();
            $table->foreignId('current_team_id')->nullable();
            $table->string('profile_photo_path', 2048)->nullable();
            $table->timestamps();
        });

        $testData = array(
            [
                'super_admin' => '1',
                'name' => 'Fred',
                'account_type' => 'staff',
                'email' => 'fred@insurancecloud.co.ke',
                'password' => Hash::make('Hesoyamin!@'),
            ],
            [
                'super_admin' => '1',
                'name' => 'Ian',
                'account_type' => 'staff',
                'email' => 'ian@insurancecloud.co.ke',
                'password' => Hash::make('Hesoyamin!@'),
            ],
            [
                'super_admin' => '1',
                'name' => 'Joseph',
                'account_type' => 'staff',
                'email' => 'joseph@insurancecloud.co.ke',
                'password' => Hash::make('Hesoyamin!@'),
            ],
            [
                'super_admin' => '1',
                'name' => 'Katula',
                'account_type' => 'staff',
                'email' => 'katula@insurancecloud.co.ke',
                'password' => Hash::make('Hesoyamin!@'),
            ]
        );

        foreach ($testData as $test) {
            $init = new User(); //The Category is the model for your migration
            $init->super_admin = $test['super_admin'];
            $init->name = $test['name'];
            $init->account_type = $test['account_type'];
            $init->email = $test['email'];
            $init->password  = $test['password'];
            $init->save();
        }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
};
