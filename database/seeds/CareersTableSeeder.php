<?php

use Illuminate\Database\Seeder;

class CareersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

            \App\Career::create([
               'name'               => 'Planning Engineer',
               'description'        => 'Revise production schedules when required due to design changes, labor or material shortages, collaborating with management, sales, production, and engineering
               Confer with establishment personnel, vendors, and customers to coordinate production and shipping activities, and to resolve complaints or eliminate delays
               Record production data, including volume produced consumption of raw materials, and quality control measures.
               Requisition and maintain inventories of materials and supplies necessary to meet production demands
               Monitor production progress and advise action to meet the schedule, if delayed
               Interface with clients, project team and sub-contractors
               Definition and purchasing of devices
               Arrangement of the product logistic and processes',
                'category_id'       =>1,
                'experience_id'     => 1,
                'location_id'       => 2,
            ]);
            \App\Career::create([
                'name'               => 'Quality Engineer',
                'description'        => 'Revise production schedules when required due to design changes, labor or material shortages, collaborating with management, sales, production, and engineering
                Confer with establishment personnel, vendors, and customers to coordinate production and shipping activities, and to resolve complaints or eliminate delays
                Record production data, including volume produced consumption of raw materials.',
                 'category_id'       =>2,
                 'experience_id'     => 3,
                 'location_id'       => 1,
             ]);
             \App\Career::create([
                'name'               => 'Construction Manager',
                'description'        => 'Revise production schedules when required due to design changes, labor or material shortages, collaborating with management, sales, production, and engineering
                Confer with establishment personnel, vendors, and customers to coordinate production and shipping activities, and to resolve complaints or eliminate delays
                Record production data, including volume produced consumption of raw materials.',
                 'category_id'       =>2,
                 'experience_id'     => 4,
                 'location_id'       => 2,
             ]);
             \App\Career::create([
                'name'               => 'Purchasing Engineer',
                'description'        => 'Revise production schedules when required due to design changes, labor or material shortages, collaborating with management, sales, production, and engineering
                Confer with establishment personnel, vendors, and customers to coordinate production and shipping activities, and to resolve complaints or eliminate delays
                Record production data, including volume produced consumption of raw materials.',
                 'category_id'       =>1,
                 'experience_id'     => 3,
                 'location_id'       => 1,
             ]);
             \App\Career::create([
                'name'               => 'Site Engineer',
                'description'        => 'Revise production schedules when required due to design changes, labor or material shortages, collaborating with management, sales, production, and engineering
                Confer with establishment personnel, vendors, and customers to coordinate production and shipping activities, and to resolve complaints or eliminate delays
                Record production data, including volume produced consumption of raw materials.',
                 'category_id'       =>1,
                 'experience_id'     => 2,
                 'location_id'       => 2,
             ]);
             \App\Career::create([
                'name'               => 'Technical Office Engineer',
                'description'        => 'Revise production schedules when required due to design changes, labor or material shortages, collaborating with management, sales, production, and engineering
                Confer with establishment personnel, vendors, and customers to coordinate production and shipping activities, and to resolve complaints or eliminate delays
                Record production data, including volume produced consumption of raw materials.',
                 'category_id'       =>1,
                 'experience_id'     => 1,
                 'location_id'       => 1,
             ]);

    }
}
