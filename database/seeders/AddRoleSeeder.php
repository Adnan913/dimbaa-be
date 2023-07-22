<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use DB;

class AddRoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('roles')->insert([
        	[
        		'id' => 1,
	            'name' => 'Super Admin',
	            'guard_name' => 'web',
        	],
        	[
        		'id' => 2,
	            'name' => 'Team Admin',
	            'guard_name' => 'web'
        	],
        	[
        		'id' => 3,
	            'name' => 'Team Manager',
	            'guard_name' => 'web'
        	],
        	[
        		'id' => 4,
	            'name' => 'Referee',
	            'guard_name' => 'web'
        	],
        	[
        		'id' => 5,
	            'name' => 'Data Manager',
	            'guard_name' => 'web'
        	],
        	[
        		'id' => 6,
	            'name' => 'League Director',
	            'guard_name' => 'web'
        	],
        	[
        		'id' => 7,
	            'name' => 'General Coordinator',
	            'guard_name' => 'web'
        	],
        	[
        		'id' => 8,
	            'name' => 'Match Commissioner',
	            'guard_name' => 'web'
        	],
        	[
        		'id' => 9,
	            'name' => 'Referee Assessor',
	            'guard_name' => 'web'
        	]
    	]);
    }
}

