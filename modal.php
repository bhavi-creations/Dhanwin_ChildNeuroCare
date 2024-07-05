<!-- Modal -->
<section>
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-xl">
            <div class="modal-content">
                <div class="modal-header">
                    <!-- <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1> -->
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-6 d-none d-lg-block">
                                <!-- Carousel code here -->
                                <div class="container" style="border-radius: 0px 230.491px 0px 0px;">
                                    <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
                                        <div class="carousel-inner">
                                            <div class="carousel-item active">
                                                <img src="assets/images/appoin.png" style="border-top-right-radius: 250px;" class="d-block w-100" alt="...">
                                                <!-- <div class="carousel-caption ">
                                                            <h5>First slide label</h5>
                                                            <p>Some representative placeholder content for the first slide.
                                                            </p>
                                                        </div> -->
                                            </div>
                                            <div class="carousel-item">
                                                <img src="assets/images/appoin2.png" style="border-top-right-radius: 250px;" class="d-block w-100" alt="...">
                                                <!-- <div class="carousel-caption ">
                                                            <h5>First slide label</h5>
                                                            <p>Some representative placeholder content for the first slide.
                                                            </p>
                                                        </div> -->
                                            </div>
                                            <div class="carousel-item">
                                                <img src="assets/images/appoin3.png" style="border-top-right-radius: 250px;" class="d-block w-100" alt="...">
                                                <!-- <div class="carousel-caption">
                                                            <h5>First slide label</h5>
                                                            <p>Some representative placeholder content for the first slide.
                                                            </p>
                                                        </div> -->
                                            </div>
                                        </div>
                                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                            <span class="visually-hidden">Previous</span>
                                        </button>
                                        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
                                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                            <span class="visually-hidden">Next</span>
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <!-- Appointment form code here -->
                                <div class="container text-center ">
                                    <p class="apt_head">Appointment Now</p>
                                    <p class="apt_desc">Book Your Appointment for Expert Care.</p>
                                    <!-- <form action="" class="apt_form" > -->
                                    <form method="POST" action="modalform.php" class="apt_form">
                                        <hr>
                                        <!-- <input type="name" placeholder="Type your name"> -->
                                        <div class="input-group mb-3">
                                            <span class="input-group-text" id="basic-addon1"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                                                    <g clip-path="url(#clip0_885_2821)">
                                                        <path d="M10.0522 10.1808C10.9769 10.1808 11.8808 9.90665 12.6497 9.39292C13.4185 8.87919 14.0178 8.14902 14.3716 7.29472C14.7255 6.44043 14.8181 5.50038 14.6377 4.59347C14.4573 3.68655 14.012 2.8535 13.3582 2.19965C12.7043 1.5458 11.8712 1.10052 10.9643 0.920128C10.0574 0.739731 9.11737 0.832317 8.26308 1.18618C7.40878 1.54004 6.67861 2.13928 6.16488 2.90813C5.65115 3.67697 5.37695 4.58089 5.37695 5.50557C5.37819 6.74515 5.87116 7.93361 6.74768 8.81012C7.62419 9.68664 8.81265 10.1796 10.0522 10.1808ZM10.0522 2.38872C10.6687 2.38872 11.2713 2.57152 11.7839 2.914C12.2964 3.25649 12.6959 3.74327 12.9318 4.3128C13.1677 4.88233 13.2295 5.50903 13.1092 6.11364C12.9889 6.71825 12.6921 7.27362 12.2562 7.70952C11.8203 8.14542 11.2649 8.44227 10.6603 8.56253C10.0557 8.6828 9.42899 8.62107 8.85946 8.38517C8.28993 8.14926 7.80315 7.74976 7.46066 7.2372C7.11818 6.72464 6.93538 6.12203 6.93538 5.50557C6.93538 4.67893 7.26376 3.88615 7.84828 3.30162C8.43281 2.7171 9.22559 2.38872 10.0522 2.38872Z" fill="#AFAFAF" />
                                                        <path d="M10.052 11.7399C8.19267 11.742 6.41011 12.4815 5.09538 13.7962C3.78065 15.1109 3.04112 16.8935 3.03906 18.7528C3.03906 18.9595 3.12116 19.1577 3.26729 19.3038C3.41342 19.4499 3.61162 19.532 3.81828 19.532C4.02494 19.532 4.22313 19.4499 4.36926 19.3038C4.51539 19.1577 4.59749 18.9595 4.59749 18.7528C4.59749 17.3062 5.17216 15.9188 6.19507 14.8959C7.21799 13.873 8.60536 13.2983 10.052 13.2983C11.4986 13.2983 12.886 13.873 13.9089 14.8959C14.9318 15.9188 15.5065 17.3062 15.5065 18.7528C15.5065 18.9595 15.5886 19.1577 15.7347 19.3038C15.8808 19.4499 16.079 19.532 16.2857 19.532C16.4923 19.532 16.6905 19.4499 16.8367 19.3038C16.9828 19.1577 17.0649 18.9595 17.0649 18.7528C17.0628 16.8935 16.3233 15.1109 15.0086 13.7962C13.6938 12.4815 11.9113 11.742 10.052 11.7399Z" fill="#AFAFAF" />
                                                    </g>
                                                    <defs>
                                                        <clipPath id="clip0_885_2821">
                                                            <rect width="18.7011" height="18.7011" fill="white" transform="translate(0.701172 0.830933)" />
                                                        </clipPath>
                                                    </defs>
                                                </svg></span>
                                            <input type="text" class="form-control" placeholder="Type Your Name" name="name" aria-label="Username" aria-describedby="basic-addon1" required>
                                        </div>
                                        <div class="input-group mb-3">
                                            <span class="input-group-text" id="basic-addon1"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                    <path d="M21.4031 16.6521V19.4573C21.4042 19.7177 21.3508 19.9754 21.2465 20.2141C21.1422 20.4527 20.9892 20.6668 20.7973 20.8429C20.6054 21.0189 20.3788 21.153 20.1322 21.2364C19.8855 21.3198 19.6241 21.3508 19.3647 21.3274C16.4874 21.0147 13.7235 20.0315 11.2952 18.4568C9.03593 17.0211 7.12047 15.1057 5.68485 12.8464C4.10459 10.4071 3.12116 7.62975 2.81423 4.7395C2.79086 4.48093 2.82159 4.22032 2.90446 3.97427C2.98733 3.72823 3.12053 3.50213 3.29556 3.31038C3.4706 3.11863 3.68365 2.96543 3.92114 2.86053C4.15863 2.75563 4.41536 2.70132 4.67499 2.70108H7.48016C7.93394 2.69661 8.37387 2.85731 8.71795 3.15321C9.06202 3.44911 9.28676 3.86003 9.35027 4.30937C9.46867 5.20709 9.68824 6.08853 10.0048 6.93688C10.1306 7.27156 10.1578 7.63529 10.0833 7.98496C10.0087 8.33464 9.83543 8.65562 9.58403 8.90985L8.39651 10.0974C9.72761 12.4383 11.6659 14.3766 14.0068 15.7077L15.1944 14.5202C15.4486 14.2688 15.7696 14.0955 16.1192 14.0209C16.4689 13.9464 16.8327 13.9736 17.1673 14.0994C18.0157 14.416 18.8971 14.6355 19.7948 14.7539C20.2491 14.818 20.6639 15.0468 20.9604 15.3968C21.2569 15.7468 21.4145 16.1935 21.4031 16.6521Z" stroke="#AFAFAF" stroke-width="1.40258" stroke-linecap="round" stroke-linejoin="round" />
                                                </svg></span>
                                            <input type="text" class="form-control" placeholder="Phone number" name="phonenumber" aria-label="Username" aria-describedby="basic-addon1" required>
                                        </div>
                                        <!-- <select type="text" class="form-control my-4" placeholder=" "> -->
                                        <select name="category" class="form-control my-4" required>
                                            <option value="" selected disabled>Skin Treatment</option>
                                            <option value="Hair Care">Hair Care</option>
                                            <option value="Pigmentation">Pigmentation</option>
                                            <option value="Age Control">Age Control</option>
                                            <option value="Dark Circles">Dark Circles</option>
                                            <option value="Acne & Acne Scars Treatment">Acne & Acne Scars Treatment</option>
                                            <option value="Glowing Skin">Glowing Skin</option>
                                            <option value="Others">Others</option>
                                        </select>
                                        <input type="date" class="form-control my-4" placeholder="Select Date" name="date" required>
                                        <button type="submit" class="btn btn-primary col-12 form-control">submit</button>

                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>