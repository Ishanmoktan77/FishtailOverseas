<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RecruitmentProcessController extends Controller
{
    public function index()
    {
        $processes = [
            [
                'id' => 1,
                'title' => "Receive Demand letter & Power of Attorney from the Employer",
                'description' =>
                'The recruitment process begins with receiving a demand letter and power of attorney from the employer, outlining the job positions and requirements.',
            ],
            [
                'id' => 2,
                'title' => 'Pre-Approval/Permission from Department of Labor, Nepal Government',
                'description' =>
                'The company obtains pre-approval or permission from the Department of Labor of the Nepal Government to recruit for the specified positions.',
            ],
            [
                'id' => 3,
                'title' => 'Job Advertisement',
                'description' =>
                'Job advertisement is posted in national daily newspapers and other media channels to reach out to more job seekers.',
            ],
            [
                'id' => 4,
                'title' => 'Inquiry Handling and other Communication',
                'description' =>
                'The company handles inquiries and communicates with potential candidates to gather more information and answer their queries.',
            ],
            [
                'id' => 5,
                'title' => 'Application Collection',
                'description' => 'The company collects and screens applications received from interested candidates.',
            ],
            [
                'id' => 6,
                'title' => 'Interview List to DOFE',
                'description' =>
                'The company submits the interview list to the Department of Foreign Employment (DOFE) for approval.',
            ],
            [
                'id' => 7,
                'title' => 'Interview and Selection Process',
                'description' =>
                "Interviews are conducted with shortlisted candidates and the selection process is completed based on the job requirements and candidate's qualifications.",
            ],
            [
                'id' => 8,
                'title' => 'Visa Processing',
                'description' =>
                'The company applies for visas for the selected candidates, ensuring all visa requirements are met.',
            ],
            [
                'id' => 9,
                'title' => 'Final Approval from DOFE',
                'description' =>
                'The company receives the final approval from DOFE to deploy the selected candidates for the job positions.',
            ],
            [
                'id' => 10,
                'title' => 'Flight Preparation & Documentation',
                'description' =>
                'The company arranges for flights, necessary documentation, and travel arrangements for the candidates.',
            ],
            [
                'id' => 11,
                'title' => 'Deployment & PDO by Fishtail Overseas',
                'description' =>
                "The company deploys the selected candidates to their respective job locations, and post-deployment orientation (PDO) is conducted by the company's authorized medical center (AMC).",
            ],
            [
                'id' => 12,
                'title' => 'Feedback',
                'description' =>
                'The company seeks feedback from the deployed candidates and the employer to continuously improve the recruitment process and services.',
            ],
        ];

        return view('frontend.recruitment-process')->with('processes', $processes);
    }
}
