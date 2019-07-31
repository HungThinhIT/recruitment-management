<?php

use Illuminate\Database\Seeder;

class CategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {    	
        DB::table('categories')->insert([[
        	'name'=>'Recruitment',
            'formatArticle'=>'<!doctype html>
<html lang="en">

<head>
  <title>Recruitment Format</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="stylesheet" href="css/custom-bs.css">
  <link rel="stylesheet" href="css/bootstrap-select.min.css">
  <link rel="stylesheet" href="fonts/icomoon/style.css">
  <link rel="stylesheet" href="fonts/line-icons/style.css">
  <link rel="stylesheet" href="css/style.css">
</head>

<body id="top">
  <div class="site-wrap">    
    <section class="site-section">
      <div class="container">
        <div class="row">
          <div class="col-lg-8">
            <div class="mb-5">
              <h3 class="h5 d-flex align-items-center mb-4 text-primary"><span class="icon-align-left mr-3"></span>Job
                Description</h3>
                <p>Gaming Audio Headset Engineer</p>
                <p>Enclave, a company of and by software engineering professionals. We have been providing outstanding quality for software engineering and software testing services since 2007. Basing on demanding features collecting from many big names in IT and ITO industries, we – by ourselves – have created innovative working environment and effective solutions that are now available to all-sized companies.</p>
              <p>We are looking for an experience engineer for the gaming audio headset project.</p>
            </div>
            <div class="mb-5">
              <h3 class="h5 d-flex align-items-center mb-4 text-primary"><span
                  class="icon-rocket mr-3"></span>Responsibilities</h3>
              <ul class="list-unstyled m-0 p-0">
                <li class="d-flex align-items-start mb-2"><span
                    class="icon-check_circle mr-2 text-muted"></span><span>Work with the audio team to implement new features in new products.</span></li>
                <li class="d-flex align-items-start mb-2"><span class="icon-check_circle mr-2 text-muted"></span><span>Work closely with the audio design team to improve our gaming headset audio.</span></li>
                <li class="d-flex align-items-start mb-2"><span
                    class="icon-check_circle mr-2 text-muted"></span><span>Work with other engineers to interface audio systems to other game systems.</span></li>
                <li class="d-flex align-items-start mb-2"><span class="icon-check_circle mr-2 text-muted"></span><span>Design, document, implement audio gaming headsets to achieve the team’s vision.</span></li>
                <li class="d-flex align-items-start mb-2"><span
                    class="icon-check_circle mr-2 text-muted"></span><span>DExpand our audio technology to enable our designers to create world class game audio.</span></li>
              </ul>
            </div>
    
            <div class="mb-5">
              <h3 class="h5 d-flex align-items-center mb-4 text-primary"><span class="icon-book mr-3"></span>Qualifications</h3>
              <ul class="list-unstyled m-0 p-0">
                <h4 class="h5 d-flex align-items-center mb-4 text-primary"></span>Minimum Qualifications:</h4>

                <li class="d-flex align-items-start mb-2"><span
                    class="icon-check_circle mr-2 text-muted"></span><span>3+ years as an Audio/Sound Software Engineer.</span></li>
                <li class="d-flex align-items-start mb-2"><span class="icon-check_circle mr-2 text-muted"></span><span>Experience with Windows Core Audio APIs.</span></li>
                <li class="d-flex align-items-start mb-2"><span
                    class="icon-check_circle mr-2 text-muted"></span><span>Windows audio driver experience.</span></li>

                <h4 class="h5 d-flex align-items-center mb-4 text-primary"></span>Preferred Qualifications:</h4>

                <li class="d-flex align-items-start mb-2"><span
                    class="icon-check_circle mr-2 text-muted"></span><span>Fluent in C++, strong C# skills..</span></li>
                <li class="d-flex align-items-start mb-2"><span class="icon-check_circle mr-2 text-muted"></span><span>BS/BEng in Math, CS or equivalent.</span></li>
                <li class="d-flex align-items-start mb-2"><span
                    class="icon-check_circle mr-2 text-muted"></span><span>Experience with Universal Windows Drivers for Audio.</span></li>
                <li class="d-flex align-items-start mb-2"><span
                    class="icon-check_circle mr-2 text-muted"></span><span>Technical knowledge of the principles of sound and audio manipulation.</span></li>

                    <h4 class="h5 d-flex align-items-center mb-4 text-primary"></span>Bonus skills:</h4>
                <li class="d-flex align-items-start mb-2"><span
                    class="icon-check_circle mr-2 text-muted"></span><span>Windows Spatial Audio Session API (SASAPI) Experience.</span></li>
                <li class="d-flex align-items-start mb-2"><span class="icon-check_circle mr-2 text-muted"></span><span>Python.</span></li>
                <li class="d-flex align-items-start mb-2"><span
                    class="icon-check_circle mr-2 text-muted"></span><span>3D Math.</span></li>
                <li class="d-flex align-items-start mb-2"><span
                    class="icon-check_circle mr-2 text-muted"></span><span>Knowledge and/or experience of audio DSP technology.</span></li>
              </ul>
            </div>
    
            <div class="mb-5">
              <h3 class="h5 d-flex align-items-center mb-4 text-primary"><span class="icon-turned_in mr-3"></span>Other
                Benifits</h3>
              <ul class="list-unstyled m-0 p-0">
                <li class="d-flex align-items-start mb-2"><span
                    class="icon-check_circle mr-2 text-muted"></span><span>Necessitatibus quibusdam facilis</span></li>
                <li class="d-flex align-items-start mb-2"><span class="icon-check_circle mr-2 text-muted"></span><span>Velit
                    unde aliquam et voluptas reiciendis non sapiente labore</span></li>
                <li class="d-flex align-items-start mb-2"><span
                    class="icon-check_circle mr-2 text-muted"></span><span>Commodi quae ipsum quas est itaque</span></li>
                <li class="d-flex align-items-start mb-2"><span class="icon-check_circle mr-2 text-muted"></span><span>Lorem
                    ipsum dolor sit amet, consectetur adipisicing elit</span></li>
                <li class="d-flex align-items-start mb-2"><span
                    class="icon-check_circle mr-2 text-muted"></span><span>Deleniti asperiores blanditiis nihil quia
                    officiis dolor</span></li>
              </ul>

               <div class="mb-5">
              <ul class="list-unstyled m-0 p-0">
                <h5>Please, submit your CV at jobs@enclave.vn. Or you can contact us via below contact for further information:</h5>  
                <li class="d-flex align-items-start mb-2"><span
                    class="icon-check_circle mr-2 text-muted"></span><span>HR Hotline: 0932 516 721 (Sunny) or 0905 630 209 (Rosie)</span></li>
                <li class="d-flex align-items-start mb-2"><span class="icon-check_circle mr-2 text-muted"></span><span>Skype: Enclave Jobs</span></li>
              </ul>
            </div>
                
          </div>
        </div>
      </div>
    </section>
  </div>
</body>

</html>'
        ],
        [
			'name'=>'Others',
            'formatArticle'=>'<p></p>'
        ]]);    
    }
}
