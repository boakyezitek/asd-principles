<?php

namespace Database\Seeders;
use App\Models\Values;

use Illuminate\Database\Seeder;

class ValuesSeeder extends BaseSeeder
{
    protected const TABLE = 'values';

    public static function up(): void
    {
        $principles = [
            [

                'title' => 'Individuals and Interactions Over Processes and Tools',
                'description' => 'The first value in the Agile Manifesto is “Individuals and interactions over processes and tools.” Valuing people more highly than processes or tools is easy to understand because it is the people who respond to business needs and drive the development process. If the process or the tools drive development, the team is less responsive to change and less likely to meet customer needs. Communication is an example of the difference between valuing individuals versus process. In the case of individuals, communication is fluid and happens when a need arises. In the case of process, communication is scheduled and requires specific conte',
            ],
            [

                'title' => 'Working Software Over Comprehensive Documentation',
                'description' => 'Historically, enormous amounts of time were spent on documenting the product for development and ultimate delivery. Technical specifications, technical requirements, technical prospectus, interface design documents, test plans, documentation plans, and approvals required for each. The list was extensive and was a cause for the long delays in development. Agile does not eliminate documentation, but it streamlines it in a form that gives the developer what is needed to do the work without getting bogged down in minutiae. Agile documents requirements as user stories, which are sufficient for a software developer to begin the task of building a new function.
                The Agile Manifesto values documentation, but it values working software more.',
            ],
            [

                'title' => 'Customer Collaboration Over Contract Negotiation',
                'description' => 'Negotiation is the period when the customer and the product manager work out the details of a delivery, with points along the way where the details may be renegotiated. Collaboration is a different creature entirely. With development models such as Waterfall, customers negotiate the requirements for the product, often in great detail, prior to any work starting. This meant the customer was involved in the process of development before development began and after it was completed, but not during the process. The Agile Manifesto describes a customer who is engaged and collaborates throughout the development process, making. This makes it far easier for development to meet their needs of the customer. Agile methods may include the customer at intervals for periodic demos, but a project could just as easily have an end-user as a daily part of the team and attending all meetings, ensuring the product meets the business needs of the customer.',
            ],
            [

                'title' => 'Responding to Change Over Following a Plan',
                'description' => 'Traditional software development regarded change as an expense, so it was to be avoided. The intention was to develop detailed, elaborate plans, with a defined set of features and with everything, generally, having as high a priority as everything else, and with a large number of many dependencies on delivering in a certain order so that the team can work on the next piece of the puzzle.',
            ],


        ];

        static::down();

        foreach ($principles as $principle) {
            Values::create($principle);
        }
    }
}
