@extends('layouts.app')

@section('title', 'Home - Center of Excellence | CoE')

@section('content')
<!-- Hero Section -->
<section class="hero-section" id="home">
    <div class="position-relative d-flex justify-content-center align-items-center" style="height: 100vh;">
        <img src="{{ asset('images/banner.jpg') }}" class="img-fluid w-100" style="height: 100vh; object-fit: cover; filter: brightness(0.8);">
        <div class="hero-content position-absolute" style="width: 150%; max-width: 1400px;">
            <div class="container-fluid px-0">
                <div class="row justify-content-center">
                    <div class="col-12">
                        <div class="hero-card" data-aos="zoom-in" data-aos-duration="1200" style="transform: scale(1.2);">
                            <div class="row g-0">
                                <!-- Ketua Photo Section -->
                                <div class="col-md-5" data-aos="fade-right" data-aos-delay="300">
                                    <img src="{{ asset('images/leader.jpg') }}" class="img-fluid" style="object-fit: cover; object-position: center; height: 380px;">
                                </div>
                                <!-- Quote Section -->
                                <div class="col-md-5 d-flex align-items-center">
                                    <div class="p-4" data-aos="fade-left" data-aos-delay="400">
                                        <p class="text-uppercase small mb-2">Telkom University | The Best Private University in Indonesia </p>
                                        <h5 class="fw-bold mb-3" style="color: #0d6efd;">Welcome to the Center of Excellence (CoE)</h5>

                                        <div class="mb-3">
                                            <div class="mb-2">
                                                <i class="fas fa-quote-left fa-2x text-muted opacity-50"></i>
                                            </div>
                                            <p class="fst-italic"> Smart Transportation and Robotics (STAR) at Telkom University. As a leading hub for research and innovation, we are dedicated to advancing cutting-edge studies in intelligent transportation and robotics. Our focus spans across smart mobility systems, signaling, telecommunications, power systems, train control, operations, and robotic technologies. Driven by a spirit of collaboration and innovation, CoE STAR is committed to fostering connectivity and convergence for smart living.</p>
                                            <div class="d-flex align-items-center mt-3">
                                                <div class="border-end pe-3 me-3">
                                                    <h5 class="mb-0">Dr. Eng. Ahmad Sugiana, S.Si.,M.T</h5>
                                                    <p class="small text-muted mb-0">Director</p>
                                                </div>
                                                <img src="{{ asset('images/signature.png') }}" alt="Signature" style="height: 40px;">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="scroll-indicator">
            <a href="#research" class="text-white">
                <i class="fas fa-chevron-down fa-2x"></i>
            </a>
        </div>
    </div>
</section>


<!-- Wave Divider -->
<div class="section-divider" style="background-color: #212529;">
    <div class="divider-wave"></div>
</div>

<!-- Research Section -->
<section class="research-section" id="research">
    <div class="container my-5">
        <div class="row">
            <div class="col-12" data-aos="fade-right" data-aos-duration="1000">
                <h1 class="display-4 fw-bold mb-4">Activity</h1>
            </div>
        </div>
        <div class="row g-4" data-aos="fade-up" data-aos-duration="1200">
            <!-- Foto 1 -->
            <div class="col-md-3 col-sm-6">
                <img src="{{ asset('images/photo1.jpg') }}" class="img-fluid rounded shadow-sm" style="aspect-ratio: 16/9; object-fit: cover;" alt="Photo 1">
            </div>
            <!-- Foto 2 -->
            <div class="col-md-3 col-sm-6">
                <img src="{{ asset('images/photo1.jpg') }}" class="img-fluid rounded shadow-sm" style="aspect-ratio: 16/9; object-fit: cover;" alt="Photo 2">
            </div>
            <!-- Foto 3 -->
            <div class="col-md-3 col-sm-6">
                <img src="{{ asset('images/photo1.jpg') }}" class="img-fluid rounded shadow-sm" style="aspect-ratio: 16/9; object-fit: cover;" alt="Photo 3">
            </div>
            <!-- Foto 4 -->
            <div class="col-md-3 col-sm-6">
                <img src="{{ asset('images/photo1.jpg') }}" class="img-fluid rounded shadow-sm" style="aspect-ratio: 16/9; object-fit: cover;" alt="Photo 4">
            </div>
            <!-- Foto 5 -->
            <div class="col-md-3 col-sm-6">
                <img src="{{ asset('images/photo2.jpg') }}" class="img-fluid rounded shadow-sm" style="aspect-ratio: 16/9; object-fit: cover;" alt="Photo 5">
            </div>
            <!-- Foto 6 -->
            <div class="col-md-3 col-sm-6">
                <img src="{{ asset('images/photo2.jpg') }}" class="img-fluid rounded shadow-sm" style="aspect-ratio: 16/9; object-fit: cover;" alt="Photo 6">
            </div>
            <!-- Foto 7 -->
            <div class="col-md-3 col-sm-6">
                <img src="{{ asset('images/photo2.jpg') }}" class="img-fluid rounded shadow-sm" style="aspect-ratio: 16/9; object-fit: cover;" alt="Photo 7">
            </div>
            <!-- Foto 8 -->
            <div class="col-md-3 col-sm-6">
                <img src="{{ asset('images/photo2.jpg') }}" class="img-fluid rounded shadow-sm" style="aspect-ratio: 16/9; object-fit: cover;" alt="Photo 8">
            </div>
             <!-- Foto 5 -->
            <div class="col-md-3 col-sm-6">
                <img src="{{ asset('images/photo3.jpg') }}" class="img-fluid rounded shadow-sm" style="aspect-ratio: 16/9; object-fit: cover;" alt="Photo 5">
            </div>
            <!-- Foto 6 -->
            <div class="col-md-3 col-sm-6">
                <img src="{{ asset('images/photo3.jpg') }}" class="img-fluid rounded shadow-sm" style="aspect-ratio: 16/9; object-fit: cover;" alt="Photo 6">
            </div>
            <!-- Foto 7 -->
            <div class="col-md-3 col-sm-6">
                <img src="{{ asset('images/photo3.jpg') }}" class="img-fluid rounded shadow-sm" style="aspect-ratio: 16/9; object-fit: cover;" alt="Photo 7">
            </div>
            <!-- Foto 8 -->
            <div class="col-md-3 col-sm-6">
                <img src="{{ asset('images/photo3.jpg') }}" class="img-fluid rounded shadow-sm" style="aspect-ratio: 16/9; object-fit: cover;" alt="Photo 8">
            </div>
        </div>
    </div>
</section>


<!-- Diagonal Divider -->
<div class="section-divider" style="background-color: #f8f9fa;">
    <div class="divider-diagonal"></div>
</div>




<!-- Team Section -->
<section class="team-section" id="team">
    <div class="container my-5">
    <h2 class="text-center mb-5 display-5 fw-bold text-primary" data-aos="fade-up">Research & Project Funding Sources of CoE | STAR</h2>


<!-- CoE STAR Research Team -->
<div class="container">
    <table class="table table-bordered table-hover align-middle">
        <thead class="table-primary text-center">
            <tr>
                <th>No</th>
                <th>Funding Title</th>
                <th>Type</th>
                <th>Involved Members</th>
                <th>Total Funding</th>
                <th>Year</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>1</td>
                <td>
                    <a href="{{ asset('pdfs/riset-fisheye-ai-2024.pdf') }}" target="_blank" class="text-decoration-none text-primary fw-semibold">
                        Fisheye and AI Research for Robotic Navigation
                    </a>
                </td>
                <td>Internal Research</td>
                <td>Heru S.P., Eriyanti, Zakiyullah R.</td>
                <td>IDR 75,000,000</td>
                <td>2024</td>
            </tr>
            <tr>
                <td>2</td>
                <td>
                    <a href="{{ asset('pdfs/project-kai-arching-2023.pdf') }}" target="_blank" class="text-decoration-none text-primary fw-semibold">
                        Electrical Arching Detection Project for KAI
                    </a>
                </td>
                <td>Industrial Project</td>
                <td>Heru S.P., Kharisma B.A., Fussy M.D.</td>
                <td>IDR 125,000,000</td>
                <td>2023</td>
            </tr>
            <tr>
                <td>3</td>
                <td>
                    <a href="{{ asset('pdfs/matching-grant-sawit-2025.pdf') }}" target="_blank" class="text-decoration-none text-primary fw-semibold">
                        Palm Oil Digitalization Matching Grant
                    </a>
                </td>
                <td>Matching Fund</td>
                <td>Heru S.P., Dina M., Porman P.</td>
                <td>IDR 300,000,000</td>
                <td>2025</td>
            </tr>
        </tbody>
    </table>
</div>

<!-- Product & Development Section -->
<section id="product-development" class="py-5" style="background: linear-gradient(135deg, #e9f2ff, #f4f9ff);">
  <div class="container">
    <!-- Title -->
    <div class="text-center mb-5" data-aos="fade-up">
      <h2 class="display-5 fw-bold text-primary">
        <i class="bi bi-lightning-charge-fill me-2 text-warning"></i>Product & Development
      </h2>
      <p class="text-muted fs-5">Explore our innovations turning research into real-world impact.</p>
    </div>

    <div class="row g-5">
      <!-- Card 1 -->
      <div class="col-md-6" data-aos="fade-up" data-aos-delay="150">
        <div class="card h-100 border-0 shadow-lg position-relative overflow-hidden">
          <div class="position-relative">
            <img src="images/prototype-agv.jpg" class="card-img-top" alt="AGV Prototype">
            <span class="badge bg-primary position-absolute top-0 start-0 m-3 shadow-sm">Prototype</span>
          </div>
          <div class="card-body p-4">
            <h5 class="card-title fw-semibold mb-2">AGV with Fisheye Navigation</h5>
            <p class="card-text text-muted small">
              A smart indoor robot equipped with a 220° fisheye camera and 3D localization, boosting autonomous navigation accuracy in dynamic environments.
            </p>
            <div class="d-flex justify-content-between align-items-center mt-3">
              <span class="text-muted small"><i class="bi bi-robot me-1"></i> Intelligent Robotics</span>
              <a href="pdfs/agv-fisheye-report.pdf" target="_blank" class="btn btn-sm btn-outline-primary rounded-pill px-3">
                <i class="bi bi-file-earmark-text me-1"></i>View Report
              </a>
            </div>
          </div>
        </div>
      </div>

      <!-- Card 2 -->
      <div class="col-md-6" data-aos="fade-up" data-aos-delay="250">
        <div class="card h-100 border-0 shadow-lg position-relative overflow-hidden">
          <div class="position-relative">
            <img src="images/rail-detection.jpg" class="card-img-top" alt="Rail Detection System">
            <span class="badge bg-success position-absolute top-0 start-0 m-3 shadow-sm">Industry Project</span>
          </div>
          <div class="card-body p-4">
            <h5 class="card-title fw-semibold mb-2">Rail & Arcing Detection System</h5>
            <p class="card-text text-muted small">
              A dual-camera rail monitoring system that detects track faults and electrical arcing in real-time, improving railway safety and predictive maintenance.
            </p>
            <div class="d-flex justify-content-between align-items-center mt-3">
              <span class="text-muted small"><i class="bi bi-train-front me-1"></i> Intelligent Railway System</span>
              <a href="pdfs/rail-detection-2023.pdf" target="_blank" class="btn btn-sm btn-outline-success rounded-pill px-3">
                <i class="bi bi-file-earmark-text me-1"></i>View Report
              </a>
            </div>
          </div>
        </div>
      </div>

        <!-- Card 1 -->
      <div class="col-md-6" data-aos="fade-up" data-aos-delay="150">
        <div class="card h-100 border-0 shadow-lg position-relative overflow-hidden">
          <div class="position-relative">
            <img src="images/prototype-agv.jpg" class="card-img-top" alt="AGV Prototype">
            <span class="badge bg-primary position-absolute top-0 start-0 m-3 shadow-sm">Prototype</span>
          </div>
          <div class="card-body p-4">
            <h5 class="card-title fw-semibold mb-2">AGV with Fisheye Navigation</h5>
            <p class="card-text text-muted small">
              A smart indoor robot equipped with a 220° fisheye camera and 3D localization, boosting autonomous navigation accuracy in dynamic environments.
            </p>
            <div class="d-flex justify-content-between align-items-center mt-3">
              <span class="text-muted small"><i class="bi bi-robot me-1"></i> Intelligent Robotics</span>
              <a href="pdfs/agv-fisheye-report.pdf" target="_blank" class="btn btn-sm btn-outline-primary rounded-pill px-3">
                <i class="bi bi-file-earmark-text me-1"></i>View Report
              </a>
            </div>
          </div>
        </div>
      </div>

      <!-- Card 2 -->
      <div class="col-md-6" data-aos="fade-up" data-aos-delay="250">
        <div class="card h-100 border-0 shadow-lg position-relative overflow-hidden">
          <div class="position-relative">
            <img src="images/rail-detection.jpg" class="card-img-top" alt="Rail Detection System">
            <span class="badge bg-success position-absolute top-0 start-0 m-3 shadow-sm">Industry Project</span>
          </div>
          <div class="card-body p-4">
            <h5 class="card-title fw-semibold mb-2">Rail & Arcing Detection System</h5>
            <p class="card-text text-muted small">
              A dual-camera rail monitoring system that detects track faults and electrical arcing in real-time, improving railway safety and predictive maintenance.
            </p>
            <div class="d-flex justify-content-between align-items-center mt-3">
              <span class="text-muted small"><i class="bi bi-train-front me-1"></i> Intelligent Railway System</span>
              <a href="pdfs/rail-detection-2023.pdf" target="_blank" class="btn btn-sm btn-outline-success rounded-pill px-3">
                <i class="bi bi-file-earmark-text me-1"></i>View Report
              </a>
            </div>
          </div>
        </div>
      </div>
      
    </div>

    <!-- Optional More -->
    <!-- <div class="text-center mt-5" data-aos="fade-up" data-aos-delay="300">
      <a href="#all-projects" class="btn btn-primary btn-lg rounded-pill px-4 shadow-sm">
        <i class="bi bi-boxes me-1"></i>View All Innovations
      </a>
    </div> -->
  </div>
</section>


    <!-- Optionally Add: News Carousel / Timeline Here -->
  </div>
</section>






        </div>
    </div>
</section>


<!-- Curves Divider -->
<div class="section-divider">
    <div class="divider-curves"></div>
</div>

<!-- partner -->
<section class="partner-section py-5 bg-light" id="partner">
    <div class="container">
        <div class="text-center mb-5" data-aos="fade-up">
            <h2 class="fw-bold">Our Partners</h2>
            <p class="text-muted">Kolaborasi strategis untuk mendukung riset dan pengembangan inovatif.</p>
        </div>
        <div class="row justify-content-center g-4" data-aos="fade-up" data-aos-delay="100">
            <div class="col-6 col-md-3 text-center">
                <img src="{{ asset('images/partner1.png') }}" class="img-fluid grayscale-hover" alt="Partner 1" style="max-height: 80px;">
            </div>
            <div class="col-6 col-md-3 text-center">
                <img src="{{ asset('images/partner2.png') }}" class="img-fluid grayscale-hover" alt="Partner 2" style="max-height: 80px;">
            </div>
            <div class="col-6 col-md-3 text-center">
                <img src="{{ asset('images/partner3.png') }}" class="img-fluid grayscale-hover" alt="Partner 3" style="max-height: 80px;">
            </div>
            <div class="col-6 col-md-3 text-center">
                <img src="{{ asset('images/partner4.png') }}" class="img-fluid grayscale-hover" alt="Partner 4" style="max-height: 80px;">
            </div>
        </div>
    </div>
</section>

@endsection
