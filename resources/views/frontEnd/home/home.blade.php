@extends('frontEnd.master')
@section('title')
    Shahin Alam | Portfolio
@endsection
@section('content')
    <section id="hero" class="d-flex flex-column justify-content-center">
        <div class="container" data-aos="zoom-in" data-aos-delay="100">
            <h1>Md. Shahin Alam</h1>
            <p>I'm <span class="typed" data-typed-items="Developer,Designer,Photographer"></span></p>
            <div class="social-links">
                <a href="https://github.com/shahinalam10" target="_blank" class="github"><i class="fa-brands fa-github"></i></a>
                <a href="https://www.linkedin.com/in/md-shahin-alam-b3a9b120b/" target="_blank" class="linkedin"><i class="fa-brands fa-linkedin-in"></i></a>
                <a href="https://www.facebook.com/mdshaheen.alam.5891" target="_blank" class="facebook"><i class="fa-brands fa-facebook-f"></i></a>
                <a href="https://www.instagram.com/shaheen_alam85/" target="_blank" class="instagram"><i class="fa-brands fa-instagram"></i></a>
                <a href="#" class="skype"><i class="fa-brands fa-skype"></i></a>
                <br>
                <div class="pt-5">
                    <a href="https://drive.google.com/file/d/1hUTchbuPfXTX-I7GqXVY4IRACx2lrW8o/view?usp=sharing" target="_blank"  style="font-size: 18px" class="downloadcv"> Download CV &nbsp;<i class="fa-solid fa-download"></i></a>
                </div>
            </div>
        </div>
    </section>
    <section id="about" class="about">
        <div class="container" data-aos="fade-up">

            <div class="row">
                <div class="col-lg-4 shadow rounded-1">
                    <img src="{{asset('assets')}}/img/profile.jpg" class="img-fluid rounded-circle" alt="">
                </div>
                <div class="col-lg-8 pt-5 pt-lg-0 content">
                    <div class="section-title">
                        <h2>Know me more</h2>
                        <p>I'm <span style="color:#cc0000;">Shahin Alam</span>, An Open-Source Full-Stack Web Developer.
                           Currently,I am working a software company as a software implementation officer.<br><br>I have been completed my graduation in the year 2022 in Computer science and engineering at Deffodil international university</p>
                    </div>
                    <h3>Personal info</h3>
                    <div class="row">
                        <div class="col-md-5" style="margin-left: 15px">
                            <ul style="font-size: 17px">
                                <li>Name: Md shahin alam</li>
                                <li>Age: 25 Years</li>
                                <li>Phone: +8801723095418</li>
                                <li>Email: mshahinalam01@gmail.com</li>
                            </ul>
                        </div>
                        <div class="col-md-5" style="margin-left: 15px">
                            <ul>
                                <li>Nationality: Bangladeshi</li>
                                <li>National ID: 5552385501 </li>
                                <li>Address:Juhuri moholla,shyamoli,Dhaka</li>
                                <li>Country:Bangladesh</li>
                            </ul>
                        </div>
                    </div>
                    <p>
                        <button class="btn btn-danger col-md-12 text-start collapsecolor" type="button" data-bs-toggle="collapse" data-bs-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
                            Why hire me for your next project?
                        </button>
                    </p>
                    <div class="collapse" id="collapseExample">
                        <div class="card card-body">
                            <p style="margin-left: 10px; text-align: justify">
                                I believe, I have the skills, qualifications and experience necessary to make a significant contribution to your organization. I have worked in the computer sector for most of my adult life, giving me a high degree of experience working with a team-leading, web application design & development, handling
                                multiple projects, maintaining databases & deployment, Graphics design.
                                <br><br>So I am confident and I believe that I am the most qualified person for your organization.
                            </p>
                        </div>
                    </div><br>
                    <a href="#contact" class="hireme">HIRE ME</a>
                </div>
            </div>
            </div>
    </section><!-- End About Section -->



    <section id="skill" class="services">
        <div class="container" data-aos="fade-up">

            <div class="section-title">
                <h2>What I do</h2>
                <p>Since beginning my journey as a developer I’ve done work for agencies, consulted for startups, and collaborated with talented people to create web products for both business and consumer use.I create successful responsive websites that are fast, easy to use, and built with best practices. The main area of my expertise is back-end development.</p>
            </div>

            <div class="row">

                <div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
                    <div class="icon-box iconbox-blue">
                        <div class="icon">
                            <svg width="100" height="100" viewBox="0 0 600 600" xmlns="http://www.w3.org/2000/svg">
                                <path stroke="none" stroke-width="0" fill="#f5f5f5" d="M300,521.0016835830174C376.1290562159157,517.8887921683347,466.0731472004068,529.7835943286574,510.70327084640275,468.03025145048787C554.3714126377745,407.6079735673963,508.03601936045806,328.9844924480964,491.2728898941984,256.3432110539036C474.5976632858925,184.082847569629,479.9380746630129,96.60480741107993,416.23090153303,58.64404602377083C348.86323505073057,18.502131276798302,261.93793281208167,40.57373210992963,193.5410806939664,78.93577620505333C130.42746243093433,114.334589627462,98.30271207620316,179.96522072025542,76.75703585869454,249.04625023123273C51.97151888228291,328.5150500222984,13.704378332031375,421.85034740162234,66.52175969318436,486.19268352777647C119.04800174914682,550.1803526380478,217.28368757567262,524.383925680826,300,521.0016835830174"></path>
                            </svg>
                            <i class="fa-brands fa-html5"></i>
                        </div>
                        <h4><a href="">HTML5</a></h4>
                        <p style="color:#cc0000;">Markup language.I have <span><strong>3</strong></span> year experience & have advance level skills</p>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-md-0" data-aos="zoom-in" data-aos-delay="200">
                    <div class="icon-box iconbox-orange ">
                        <div class="icon">
                            <svg width="100" height="100" viewBox="0 0 600 600" xmlns="http://www.w3.org/2000/svg">
                                <path stroke="none" stroke-width="0" fill="#f5f5f5" d="M300,582.0697525312426C382.5290701553225,586.8405444964366,449.9789794690241,525.3245884688669,502.5850820975895,461.55621195738473C556.606425686781,396.0723002908107,615.8543463187945,314.28637112970534,586.6730223649479,234.56875336149918C558.9533121215079,158.8439757836574,454.9685369536778,164.00468322053177,381.49747125262974,130.76875717737553C312.15926192815925,99.40240125094834,248.97055460311594,18.661163978235184,179.8680185752513,50.54337015887873C110.5421016452524,82.52863877960104,119.82277516462835,180.83849132639028,109.12597500060166,256.43424936330496C100.08760227029461,320.3096726198365,92.17705696193138,384.0621239912766,124.79988738764834,439.7174275375508C164.83382741302287,508.01625554203684,220.96474134820875,577.5009287672846,300,582.0697525312426"></path>
                            </svg>
                            <i class="fa-brands fa-css3"></i>
                        </div>
                        <h4>CSS3</h4>
                        <p  style="color:#2862e9;">Cascading Style Sheets.I have <span><strong>3</strong></span> year experience & advance level skills</p>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-lg-0" data-aos="zoom-in" data-aos-delay="300">
                    <div class="icon-box iconbox-pink">
                        <div class="icon">
                            <svg width="100" height="100" viewBox="0 0 600 600" xmlns="http://www.w3.org/2000/svg">
                                <path stroke="none" stroke-width="0" fill="#f5f5f5" d="M300,541.5067337569781C382.14930387511276,545.0595476570109,479.8736841581634,548.3450877840088,526.4010558755058,480.5488172755941C571.5218469581645,414.80211281144784,517.5187510058486,332.0715597781072,496.52539010469104,255.14436215662573C477.37192572678356,184.95920475031193,473.57363656557914,105.61284051026155,413.0603344069578,65.22779650032875C343.27470386102294,18.654635553484475,251.2091493199835,5.337323636656869,175.0934190732945,40.62881213300186C97.87086631185822,76.43348514350839,51.98124368387456,156.15599469081315,36.44837278890362,239.84606092416172C21.716077023791087,319.22268207091537,43.775223500013084,401.1760424656574,96.891909868211,461.97329694683043C147.22146801428983,519.5804099606455,223.5754009179313,538.201503339737,300,541.5067337569781"></path>
                            </svg>
                            <i class="fa-brands fa-bootstrap"></i>
                        </div>
                        <h4><a href="">Bootstrap5</a></h4>
                        <p style="color:#7913e6;">Bootstrap5 is CSS framework. <span><strong>3</strong></span> year experience & I have also advance level skills</p>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4" data-aos="zoom-in" data-aos-delay="100">
                    <div class="icon-box iconbox-yellow">
                        <div class="icon">
                            <svg width="100" height="100" viewBox="0 0 600 600" xmlns="http://www.w3.org/2000/svg">
                                <path stroke="none" stroke-width="0" fill="#f5f5f5" d="M300,503.46388370962813C374.79870501325706,506.71871716319447,464.8034551963731,527.1746412648533,510.4981551193396,467.86667711651364C555.9287308511215,408.9015244558933,512.6030010748507,327.5744911775523,490.211057578863,256.5855673507754C471.097692560561,195.9906835881958,447.69079081568157,138.11976852964426,395.19560036434837,102.3242989838813C329.3053358748298,57.3949838291264,248.02791733380457,8.279543830951368,175.87071277845988,42.242879143198664C103.41431057327972,76.34704239035025,93.79494320519305,170.9812938413882,81.28167332365135,250.07896920659033C70.17666984294237,320.27484674793965,64.84698225790005,396.69656628748305,111.28512138212992,450.4950937839243C156.20124167950087,502.5303643271138,231.32542653798444,500.4755392045468,300,503.46388370962813"></path>
                            </svg>
                            <i class="fa-brands fa-square-js"></i>
                        </div>
                        <h4><a href="">JavaScript</a></h4>
                        <p style="color:#beab06;">JS powerful programming language. I have <span><strong>1</strong></span> year experience & mid-level skills</p>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4" data-aos="zoom-in" data-aos-delay="200">
                    <div class="icon-box iconbox-red">
                        <div class="icon">
                            <svg width="100" height="100" viewBox="0 0 600 600" xmlns="http://www.w3.org/2000/svg">
                                <path stroke="none" stroke-width="0" fill="#f5f5f5" d="M300,532.3542879108572C369.38199826031484,532.3153073249985,429.10787420159085,491.63046689027357,474.5244479745417,439.17860296908856C522.8885846962883,383.3225815378663,569.1668002868075,314.3205725914397,550.7432151929288,242.7694973846089C532.6665558377875,172.5657663291529,456.2379748765914,142.6223662098291,390.3689995646985,112.34683881706744C326.66090330228417,83.06452184765237,258.84405631176094,53.51806209861945,193.32584062364296,78.48882559362697C121.61183558270385,105.82097193414197,62.805066853699245,167.19869350419734,48.57481801355237,242.6138429142374C34.843463184063346,315.3850353017275,76.69343916112496,383.4422959591041,125.22947124332185,439.3748458443577C170.7312796277747,491.8107796887764,230.57421082200815,532.3932930995766,300,532.3542879108572"></path>
                            </svg>
                            <i class="fa-brands fa-php"></i>
                        </div>
                        <h4><a href="">PHP</a></h4>
                        <p style="color:#7377ad;">Hypertext preprocessor.This language I have <span><strong>1</strong></span> year experience & mid-level skills</p>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4" data-aos="zoom-in" data-aos-delay="300">
                    <div class="icon-box iconbox-teal">
                        <div class="icon">
                            <svg width="100" height="100" viewBox="0 0 600 600" xmlns="http://www.w3.org/2000/svg">
                                <path stroke="none" stroke-width="0" fill="#f5f5f5" d="M300,566.797414625762C385.7384707136149,576.1784315230908,478.7894351017131,552.8928747891023,531.9192734346935,484.94944893311C584.6109503024035,417.5663521118492,582.489472248146,322.67544863468447,553.9536738515405,242.03673114598146C529.1557734026468,171.96086150256528,465.24506316201064,127.66468636344209,395.9583748389544,100.7403814666027C334.2173773831606,76.7482773500951,269.4350130405921,84.62216499799875,207.1952322260088,107.2889140133804C132.92018162631612,134.33871894543012,41.79353780512637,160.00259165414826,22.644507872594943,236.69541883565114C3.319112789854554,314.0945973066697,72.72355303640163,379.243833228382,124.04198916343866,440.3218312028393C172.9286146004772,498.5055451809895,224.45579914871206,558.5317968840102,300,566.797414625762"></path>
                            </svg>
                            <i class="fa-brands fa-laravel"></i>
                        </div>
                        <h4><a href="">Laravel</a></h4>
                        <p style="color:#f7463d;">Open-source PHP web framework.I have <span><strong>1</strong></span> year experience & mid-level skills</p>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
                    <div class="icon-box iconbox-database ">
                        <div class="icon">
                            <svg width="100" height="100" viewBox="0 0 600 600" xmlns="http://www.w3.org/2000/svg">
                                <path stroke="none" stroke-width="0" fill="#f5f5f5" d="M300,582.0697525312426C382.5290701553225,586.8405444964366,449.9789794690241,525.3245884688669,502.5850820975895,461.55621195738473C556.606425686781,396.0723002908107,615.8543463187945,314.28637112970534,586.6730223649479,234.56875336149918C558.9533121215079,158.8439757836574,454.9685369536778,164.00468322053177,381.49747125262974,130.76875717737553C312.15926192815925,99.40240125094834,248.97055460311594,18.661163978235184,179.8680185752513,50.54337015887873C110.5421016452524,82.52863877960104,119.82277516462835,180.83849132639028,109.12597500060166,256.43424936330496C100.08760227029461,320.3096726198365,92.17705696193138,384.0621239912766,124.79988738764834,439.7174275375508C164.83382741302287,508.01625554203684,220.96474134820875,577.5009287672846,300,582.0697525312426"></path>
                            </svg>
                            <i class="fa-sharp fa-solid fa-database"></i>
                        </div>
                        <h4><a href="">MySQL DB</a></h4>
                        <p style="color:#005e87;">MySQL is an open-source relational database management system.I have <span><strong>strong</strong></span> knowledge</p>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-md-0" data-aos="zoom-in" data-aos-delay="200">
                    <div class="icon-box iconbox-python">
                        <div class="icon">
                            <svg width="100" height="100" viewBox="0 0 600 600" xmlns="http://www.w3.org/2000/svg">
                                <path stroke="none" stroke-width="0" fill="#f5f5f5" d="M300,503.46388370962813C374.79870501325706,506.71871716319447,464.8034551963731,527.1746412648533,510.4981551193396,467.86667711651364C555.9287308511215,408.9015244558933,512.6030010748507,327.5744911775523,490.211057578863,256.5855673507754C471.097692560561,195.9906835881958,447.69079081568157,138.11976852964426,395.19560036434837,102.3242989838813C329.3053358748298,57.3949838291264,248.02791733380457,8.279543830951368,175.87071277845988,42.242879143198664C103.41431057327972,76.34704239035025,93.79494320519305,170.9812938413882,81.28167332365135,250.07896920659033C70.17666984294237,320.27484674793965,64.84698225790005,396.69656628748305,111.28512138212992,450.4950937839243C156.20124167950087,502.5303643271138,231.32542653798444,500.4755392045468,300,503.46388370962813"></path>
                            </svg>
                            <i class="fa-brands fa-python"></i>
                        </div>
                        <h4><a href="">Python</a></h4>
                        <p style="color:#3276AE;"><strong>Python</strong>, I have been learning this language few month. This language is most flexible and standard</p>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-lg-0" data-aos="zoom-in" data-aos-delay="300">
                    <div class="icon-box iconbox-github">
                        <div class="icon">
                            <svg width="100" height="100" viewBox="0 0 600 600" xmlns="http://www.w3.org/2000/svg">
                                <path stroke="none" stroke-width="0" fill="#f5f5f5" d="M300,503.46388370962813C374.79870501325706,506.71871716319447,464.8034551963731,527.1746412648533,510.4981551193396,467.86667711651364C555.9287308511215,408.9015244558933,512.6030010748507,327.5744911775523,490.211057578863,256.5855673507754C471.097692560561,195.9906835881958,447.69079081568157,138.11976852964426,395.19560036434837,102.3242989838813C329.3053358748298,57.3949838291264,248.02791733380457,8.279543830951368,175.87071277845988,42.242879143198664C103.41431057327972,76.34704239035025,93.79494320519305,170.9812938413882,81.28167332365135,250.07896920659033C70.17666984294237,320.27484674793965,64.84698225790005,396.69656628748305,111.28512138212992,450.4950937839243C156.20124167950087,502.5303643271138,231.32542653798444,500.4755392045468,300,503.46388370962813"></path>
                            </svg>
                            <i class="fa-brands fa-github"></i>
                        </div>
                        <h4><a href="">Github</a></h4>
                        <p style="color:black;"><strong>Github</strong> is an Internet hosting service for software development and version control using Git. I have a lot of experience in github</p>
                    </div>
                </div>

            </div>

        </div>
    </section>


<!--training background start-->
    <section id="certificate" class="services">
        <div class="container" data-aos="fade-up">

            <div class="section-title">
                <h2>Training Background</h2>
            </div>

            <div class="row">

                <div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
                    <div class="icon-box iconbox-blue">
                        <div class="icon">
                            <img src="{{asset('assets')}}/img/training/bitm.png" style="height: 120px; width: 120px">
                        </div>
                        <h4><a href="">PHP with laravel framework</a></h4>
                        <p style="color:#0053a4;">This course duration 3 month. I gather strong knowledge PHP(OOP), laravel, Ajax, Bootstrap, MySQL etc.</p>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-md-0" data-aos="zoom-in" data-aos-delay="200">
                    <div class="icon-box iconbox-orange ">
                        <div class="icon">
                            <img src="{{asset('assets')}}/img/training/ict.png" style="height: 60px; width: 105px">
                        </div>
                        <h4>C# and Graphics design</h4>
                        <p  style="color:#16a84f;">Course duration 10 days location at shariyatpur polytechnic institute. C# and good concept of graphics animation I have learned</p>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-lg-0" data-aos="zoom-in" data-aos-delay="300">
                    <div class="icon-box iconbox-pink">
                        <div class="icon">
                            <img src="{{asset('assets')}}/img/training/cadd.png" style="height: 90px; width: 105px">
                        </div>
                        <h4><a href="">Web design & development</a></h4>
                        <p style="color:#cf000f;">Course duration 4 month & I have learned how to professionally make web design and development and deployment</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--trining background end-->

    <!-- ======= Facts Section ======= -->
    <section id="facts" class="facts">
        <div class="container" data-aos="fade-up">

            <div class="section-title">
                <h2>Achievement</h2>
            </div>

            <div class="row">

                <div class="col-lg-3 col-md-6">
                    <div class="count-box">
                        <i class="fa-solid fa-laptop-code"></i>
                        <span data-purecounter-start="0" data-purecounter-end="2" data-purecounter-duration="2" class="purecounter"></span>
                        <p>Year's experience</p>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 mt-5 mt-md-0">
                    <div class="count-box">
                        <i class="fa-solid fa-check"></i>
                        <span data-purecounter-start="0" data-purecounter-end="10" data-purecounter-duration="2" class="purecounter"></span>
                        <p>Complete Projects</p>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 mt-5 mt-lg-0">
                    <div class="count-box">
                        <i class="fa-solid fa-mug-saucer"></i>
                        <span data-purecounter-start="0" data-purecounter-end="15" data-purecounter-duration="2" class="purecounter"></span>
                        <p>Cup of coffee</p>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 mt-5 mt-lg-0">
                    <div class="count-box">
                        <i class="fa-solid fa-award"></i>
                        <span data-purecounter-start="0" data-purecounter-end="1" data-purecounter-duration="2" class="purecounter"></span>
                        <p>Professonal </p>
                    </div>
                </div>

            </div>

        </div>
    </section><!-- End Facts Section -->

    <!-- ======= Skills Section ======= -->


    <!-- ======= Resume Section ======= -->
    <section id="resume" class="resume">
        <div class="container" data-aos="fade-up">

            <div class="section-title">
                <h2>Resume</h2>
                <p>Here is my education qualification and details my office.</p>
            </div>

            <div class="row">
                <div class="col-lg-6">
                    <h3 class="resume-title">Education</h3>
                    <div class="resume-item">
                        <h4>B.Sc Engineering</h4>
                        <p><img src="{{asset('assets')}}/elogo/diulogo.png" alt="logo" style="height: 30px;width: 30px"> &nbsp; <strong>Daffodil international university</strong></p>
                        <p>Technology&nbsp; : Computer science and engineering</p>
                        <p>Passing year&nbsp; : 2022</p>
                        <p>Final year project document: <a class="plink" href="https://internship.daffodilvarsity.edu.bd/?app=home&cmd=reportsViewPDFskin&project_number=19487" target="_blank">E-commerce web base application</a></p>
                    </div>
                    <div class="resume-item">
                        <h4>Diploma Engineering</h4>
                        <p><img src="{{asset('assets')}}/elogo/clglogo.jpg" alt="logo" style="height: 30px;width: 30px">&nbsp; <strong>Shariyatpur polytechnic institute</strong></p>
                        <p>Technology &nbsp;: Computer Science</p>
                        <p>Passing year&nbsp; : 2018</p>
                        <p>Board: Dhaka</p>
                    </div>
                    <div class="resume-item">
                        <h4>Secondary School Certificate</h4>
                        <p><img src="{{asset('assets')}}/elogo/schoollogo.jpg" alt="logo" style="height: 30px;width: 30px"><strong> Samontasar high school</strong></p>
                        <p>Group &nbsp;: Science</p>
                        <p>Board &nbsp;: Dhaka</p>
                        <p>Passing year&nbsp; : 2014</p>
                    </div>
                </div>
                <div class="col-lg-6">
                    <h3 class="resume-title">Professional Experience</h3>
                    <div class="resume-item">
                        <h4>Software implementation & support officer </h4>
                        <h5>1 september 2021 - Present</h5>
                        <p><img src="{{asset('assets')}}/elogo/dupl.png" alt="logo" style="height: 40px;width: 40px">&nbsp;<strong>Desh universal private limited</strong></p>
                        <p><i style="color: #cc0000" class="fa-solid fa-location-dot"></i>&nbsp;As-Salam Tower, 82-83 Zoo Road, Block-A,Mirpur, Dhaka-1216</p>
                    </div>
                </div>
            </div>

        </div>
    </section><!-- End Resume Section -->

    <!-- ======= Portfolio Section ======= -->
    <section id="portfolio" class="portfolio section-bg">
        <div class="container" data-aos="fade-up">

            <div class="section-title">
                <h2>Portfolio</h2>
                <p>I have build some project.A preview of some website application I worked on. </p>
            </div>

            <div class="row">
                <div class="col-lg-12 d-flex justify-content-center" data-aos="fade-up" data-aos-delay="100">
                    <ul id="portfolio-flters" class="bordered">
                        <li data-filter="*" class="filter-active">All</li>
                        <li data-filter=".filter-app">App</li>
                        <li data-filter=".filter-web">Web</li>
                        <li data-filter=".filter-web">Web</li>
                    </ul>
                </div>
            </div>

            <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="200">

                <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                    <div class="portfolio-wrap">
                        <img src="assets/img/portfolio/portfolio-1.png" class="img-fluid" alt="">
                        <div class="portfolio-info">
                            <h4 style="color: #cc0000">Ice shop</h4>
                            <p>App</p>
                            <div class="portfolio-links">
                                <a href="assets/img/portfolio/portfolio-1.png" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Ice shop"><i class="bx bx-plus"></i></a>
                                <a href="portfolio-details.html" class="portfolio-details-lightbox" data-glightbox="type: external" title="Portfolio Details"><i class="bx bx-link"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 portfolio-item filter-web">
                    <div class="portfolio-wrap">
                        <img src="assets/img/portfolio/portfolio-2.png" class="img-fluid" alt="">
                        <div class="portfolio-info">
                            <h4 style="color: #cc0000">School management</h4>
                            <p>Web</p>
                            <div class="portfolio-links">
                                <a href="assets/img/portfolio/portfolio-2.png" data-gallery="portfolioGallery" class="portfolio-lightbox" title="School management"><i class="bx bx-plus"></i></a>
                                <a href="portfolio-details.html" class="portfolio-details-lightbox" data-glightbox="type: external" title="Portfolio Details"><i class="bx bx-link"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                    <div class="portfolio-wrap">
                        <img src="assets/img/portfolio/portfolio-3.png" class="img-fluid" alt="">
                        <div class="portfolio-info">
                            <h4 style="color: #cc0000">School management</h4>
                            <p>App</p>
                            <div class="portfolio-links">
                                <a href="assets/img/portfolio/portfolio-3.png" data-gallery="portfolioGallery" class="portfolio-lightbox" title="School management"><i class="bx bx-plus"></i></a>
                                <a href="portfolio-details.html" class="portfolio-details-lightbox" data-glightbox="type: external" title="Portfolio Details"><i class="bx bx-link"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 portfolio-item filter-card">
                    <div class="portfolio-wrap">
                        <img src="assets/img/portfolio/portfolio-3.png" class="img-fluid" alt="">
                        <div class="portfolio-info">
                            <h4 style="color: #cc0000">Job here</h4>
                            <p>Card</p>
                            <div class="portfolio-links">
                                <a href="assets/img/portfolio/portfolio-3.png" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Job here"><i class="bx bx-plus"></i></a>
                                <a href="portfolio-details.html" class="portfolio-details-lightbox" data-glightbox="type: external" title="Portfolio Details"><i class="bx bx-link"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 portfolio-item filter-web">
                    <div class="portfolio-wrap">
                        <img src="assets/img/portfolio/portfolio-5.jpg" class="img-fluid" alt="">
                        <div class="portfolio-info">
                            <h4 style="color: #cc0000">School management</h4>
                            <p>Web</p>
                            <div class="portfolio-links">
                                <a href="assets/img/portfolio/portfolio-5.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="School management"><i class="bx bx-plus"></i></a>
                                <a href="portfolio-details.html" class="portfolio-details-lightbox" data-glightbox="type: external" title="Portfolio Details"><i class="bx bx-link"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                    <div class="portfolio-wrap">
                        <img src="assets/img/portfolio/portfolio-6.png" class="img-fluid" alt="">
                        <div class="portfolio-info">
                            <h4 style="color: #cc0000">My portfolio</h4>
                            <p>App</p>
                            <div class="portfolio-links">
                                <a href="assets/img/portfolio/portfolio-6.png" data-gallery="portfolioGallery" class="portfolio-lightbox" title="My portfolio"><i class="bx bx-plus"></i></a>
                                <a href="portfolio-details.html" class="portfolio-details-lightbox" data-glightbox="type: external" title="Portfolio Details"><i class="bx bx-link"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 portfolio-item filter-card">
                    <div class="portfolio-wrap">
                        <img src="assets/img/portfolio/portfolio-7.jpg" class="img-fluid" alt="">
                        <div class="portfolio-info">
                            <h4 style="color: #cc0000">Topper</h4>
                            <p>Card</p>
                            <div class="portfolio-links">
                                <a href="assets/img/portfolio/portfolio-7.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Topper"><i class="bx bx-plus"></i></a>
                                <a href="portfolio-details.html" class="portfolio-details-lightbox" data-glightbox="type: external" title="Portfolio Details"><i class="bx bx-link"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 portfolio-item filter-card">
                    <div class="portfolio-wrap">
                        <img src="assets/img/portfolio/portfolio-8.jpg" class="img-fluid" alt="">
                        <div class="portfolio-info">
                            <h4>Card 3</h4>
                            <p>Card</p>
                            <div class="portfolio-links">
                                <a href="assets/img/portfolio/portfolio-8.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Card 3"><i class="bx bx-plus"></i></a>
                                <a href="portfolio-details.html" class="portfolio-details-lightbox" data-glightbox="type: external" title="Portfolio Details"><i class="bx bx-link"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 portfolio-item filter-web">
                    <div class="portfolio-wrap">
                        <img src="assets/img/portfolio/portfolio-9.jpg" class="img-fluid" alt="">
                        <div class="portfolio-info">
                            <h4>Web 3</h4>
                            <p>Web</p>
                            <div class="portfolio-links">
                                <a href="assets/img/portfolio/portfolio-9.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Web 3"><i class="bx bx-plus"></i></a>
                                <a href="portfolio-details.html" class="portfolio-details-lightbox" data-glightbox="type: external" title="Portfolio Details"><i class="bx bx-link"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section><!-- End Portfolio Section -->

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
        <div class="container" data-aos="fade-up">

            <div class="section-title">
                <h2>Get in touch</h2>
            </div>

            <div class="row mt-1">

                <div class="col-lg-4">
                    <div class="info">
                        <div class="address">
                            <i class="fa-solid fa-location-dot"></i>
                            <h4>Location:</h4>
                            <p>Juhuri mohollah, F Block, shyamoli, Dhaka-1207 </p>
                        </div>

                        <div class="email">
                            <i class="fa-regular fa-envelope"></i>
                            <h4>Email:</h4>
                            <p>mshahinalam01@gmail.com</p>
                        </div>

                        <div class="phone">
                            <i class="fa-solid fa-phone-volume"></i>
                            <h4>Call:</h4>
                            <p>+8801723095418</p>
                        </div>

                    </div>

                </div>

                <div class="col-lg-8 mt-5 mt-lg-0">

                    <form action="{{route('send-data')}}" method="post">
                        @csrf
                        <div class="row">
                            <div class="col-md-6 form-group">
                                <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required>
                            </div>
                            <div class="col-md-6 form-group mt-3 mt-md-0">
                                <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required>
                            </div>
                        </div>
                        <div class="form-group mt-3">
                            <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" required>
                        </div>
                        <div class="form-group mt-3">
                            <textarea class="form-control" name="message" rows="5" placeholder="Message" required></textarea>
                        </div>
                        <div class="pt-3">
                            <div class="row">
                                <div class="col-md-4">
                                    <button type="submit" value="submit" class="sendmessage">send message</button>
                                </div>
                                <div class="col-md-3"></div>
                                <div class="col-md-5">
                                    <h4 class="btn btn-lg text-success">{{session('message')}}</h4>
                                </div>
                            </div>
                        </div>
                    </form>

                </div>

            </div>

        </div>
    </section><!-- End Contact Section -->
@endsection
