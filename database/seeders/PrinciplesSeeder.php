<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Principles;

class PrinciplesSeeder extends BaseSeeder
{
    protected const TABLE = 'principles';

    public static function up(): void
    {
        $principles = [
            [
                'title' => 'Customer satisfaction through early and continuous software delivery ',
                'description' => 'Customers are happier when they receive working software at regular intervals, rather than waiting extended periods of time between releases.',
            ],
            [
                'title' => 'Accommodate changing requirements throughout the development process',
                'description' => 'The ability to avoid delays when a requirement or feature request changes.',
            ],
            [
                'title' => 'Frequent delivery of working software',
                'description' => 'Scrum accommodates this principle since the team operates in software sprints or iterations that ensure regular delivery of working software.',
            ],
            [
                'title' => 'Collaboration between the business stakeholders and developers throughout the project',
                'description' => 'Better decisions are made when the business and technical team are aligned.',
            ],
            [
                'title' => 'Support, trust, and motivate the people involved',
                'description' => 'Motivated teams are more likely to deliver their best work than unhappy teams.',
            ],
            [
                'title' => 'Enable face-to-face interactions ',
                'description' => 'Communication is more successful when development teams are co-located.',
            ],
            [
                'title' => 'Working software is the primary measure of progress ',
                'description' => 'Delivering functional software to the customer is the ultimate factor that measures progress.',
            ],
            [
                'title' => 'Agile processes to support a consistent development pace',
                'description' => 'Teams establish a repeatable and maintainable speed at which they can deliver working software, and they repeat it with each release.',
            ],
            [
                'title' => 'Attention to technical detail and design enhances agility',
                'description' => 'The right skills and good design ensures the team can maintain the pace, constantly improve the product, and sustain change.',
            ],
            [
                'title' => 'Simplicity',
                'description' => 'Develop just enough to get the job done for right now.',
            ],
            [
                'title' => 'Self-organizing teams encourage great architectures, requirements, and designs',
                'description' => 'Skilled and motivated team members who have decision-making power, take ownership, communicate regularly with other team members, and share ideas that deliver quality products.',
            ],
            [
                'title' => 'Regular reflections on how to become more effective',
                'description' => 'Self-improvement, process improvement, advancing skills, and techniques help team members work more efficiently.',
            ],


        ];

        static::down();

        foreach ($principles as $principle) {
            Principles::create($principle);
        }
    }
}
