<?php
include_once('./config/conn.php');
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Ration Admin Dashboard</title>
    <link
      href="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/style.min.css"
      rel="stylesheet"
    />
    <link href="./assets/css/style.css" rel="stylesheet" />
    <link rel="stylesheet" href="./assets/css/form.css">
    <script
      src="https://use.fontawesome.com/releases/v6.3.0/js/all.js"
      crossorigin="anonymous"
    ></script>
    <style>
      .card-body {
        background: #2a2f3b;
        color: #fff;
        border-radius: 9px;
      }
      /*tr:hover {*/
      /*    background: #212529;*/
      /*    color:#fff;*/
      /*}*/
      table#datatablesSimple {
        color: #fff;
        font-weight: 500;
        border-color: #090e1b;
      }
      .card.mb-4 {
        border: none;
        background: #000;
      }
      main {
        /* background: #000; */
      }
      footer.py-4.bg-light.mt-auto {
        background: #2a2f3b !important;
      }
      h1.mt-4 {
        color: #fff;
      }
      td {
        opacity: 0.6 !important;
      }
      tr *:hover {
        color: #fff !important;
        opacity: 1 !important;
      }
    </style>
  </head>
  <body class="sb-nav-fixed">
    <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
      <!-- Navbar Brand-->
      <a class="navbar-brand ps-3" href="index.html">Question Paper Admin</a>
      <!-- Sidebar Toggle-->
      <button
        class="btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0"
        id="sidebarToggle"
        href="#!"
      >
        <i class="fas fa-bars"></i>
      </button>
      <ul class="navbar-nav ms-auto ms-auto me-3 me-lg-4">
        <li class="nav-item dropdown">
          <a
            class="nav-link dropdown-toggle"
            id="navbarDropdown"
            href="#"
            role="button"
            data-bs-toggle="dropdown"
            aria-expanded="false"
            ><i class="fas fa-user fa-fw text-white"></i
          ></a>
          <ul
            class="dropdown-menu dropdown-menu-end"
            aria-labelledby="navbarDropdown"
          >
            <li><a class="dropdown-item" href="../logout.php">Logout</a></li>
            <li><a class="dropdown-item" href="../logout.php">Logout</a></li>
          </ul>
        </li>
      </ul>
    </nav>
    <div id="layoutSidenav">
      <div id="layoutSidenav_nav">
        <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
          <div class="sb-sidenav-menu">
            <div class="nav">
              <div class="sb-sidenav-menu-heading">Core</div>
              <a class="nav-link" href="./home.php">
                <div class="sb-nav-link-icon">
                  <i class="fas fa-calendar"></i>
                </div>
                Add Questions
              </a>
              <!-- <a class="nav-link" href="./reguser.php">
                <div class="sb-nav-link-icon"><i class="fas fa-users"></i></div>
                All Users
              </a> -->
              <a class="nav-link" href="./userinfo.php">
                <div class="sb-nav-link-icon"><i class="fas fa-user"></i></div>
                Faculty Profile
              </a>
              <a class="nav-link" href="./paper.php">
                <div class="sb-nav-link-icon"><i class="fas fa-link"></i></div>
                Send Paper Link
              </a>
              <a class="nav-link" href="../logout.php">
                <div class="sb-nav-link-icon">
                  <i class="fas fa-sign-out"></i>
                </div>
                logout
              </a>
            </div>
          </div>
        </nav>
      </div>
      <div id="layoutSidenav_content">
        <main>
          <!-- <div height="100px"></div> -->
          <div class="demo-page">
            <div class="demo-page-navigation">
              <nav>
                <ul>
                  <li>
                    <a href="#structure">
                      <svg
                        xmlns="http://www.w3.org/2000/svg"
                        width="24"
                        height="24"
                        viewBox="0 0 24 24"
                        fill="none"
                        stroke="currentColor"
                        stroke-width="2"
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        class="feather feather-layers"
                      >
                        <polygon points="12 2 2 7 12 12 22 7 12 2" />
                        <polyline points="2 17 12 22 22 17" />
                        <polyline points="2 12 12 17 22 12" />
                      </svg>
                      Exam details</a
                    >
                  </li>
                  <li>
                    <a href="#date">
                      <svg
                        xmlns="http://www.w3.org/2000/svg"
                        width="24"
                        height="24"
                        viewBox="0 0 24 24"
                        fill="none"
                        stroke="currentColor"
                        stroke-width="2"
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        class="feather feather-calendar"
                      >
                        <rect
                          x="3"
                          y="4"
                          width="18"
                          height="18"
                          rx="2"
                          ry="2"
                        />
                        <line x1="16" y1="2" x2="16" y2="6" />
                        <line x1="8" y1="2" x2="8" y2="6" />
                        <line x1="3" y1="10" x2="21" y2="10" />
                      </svg>
                      Add Slot details</a
                    >
                  </li>
                  <li>
                    <a href="#input-types">
                      <svg
                        xmlns="http://www.w3.org/2000/svg"
                        width="24"
                        height="24"
                        viewBox="0 0 24 24"
                        fill="none"
                        stroke="currentColor"
                        stroke-width="2"
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        class="feather feather-feather"
                      >
                        <path
                          d="M20.24 12.24a6 6 0 0 0-8.49-8.49L5 10.5V19h8.5z"
                        />
                        <line x1="16" y1="8" x2="2" y2="22" />
                        <line x1="17.5" y1="15" x2="9" y2="15" />
                      </svg>
                      Email Details</a
                    >
                  </li>
                </ul>
              </nav>
            </div>
            <main class="demo-page-content">
              <form action="./logics/addque.php" method="post">
                <section>
                  <div class="href-target" id="intro"></div>
                  <h1 class="package-name">Send Questions Paper</h1>
                  <p></p>
                  <strong>Rules:</strong>
                  <ul>
                    <li>Add question with its difficulty level.</li>
                    <li>Dont add repeated Questions</li>
                    <li>Please provide proper marking scheme</li>
                  </ul>
                </section>
                <section>
                  <div class="href-target" id="structure"></div>
                  <h1>
                    <svg
                      xmlns="http://www.w3.org/2000/svg"
                      width="24"
                      height="24"
                      viewBox="0 0 24 24"
                      fill="none"
                      stroke="currentColor"
                      stroke-width="2"
                      stroke-linecap="round"
                      stroke-linejoin="round"
                      class="feather feather-layers"
                    >
                      <polygon points="12 2 2 7 12 12 22 7 12 2" />
                      <polyline points="2 17 12 22 22 17" />
                      <polyline points="2 12 12 17 22 12" />
                    </svg>
                    Exam details
                  </h1>
                  <p>Please add details of the exam.</p>
                  <div class="nice-form-group">
                    <label>University</label>
                    <select name="university">
                      <option>Please select your host University</option>
                      <option>Mumbai University</option>
                      <option>Pune University</option>
                      <option>AKTU</option>
                    </select>
                  </div>

                  <div class="nice-form-group">
                    <label>Semester</label>
                    <select name="sem">
                      <option>Please select a semester</option>
                      <option>1st sem</option>
                      <option>2nd sem</option>
                      <option>3rd sem</option>
                      <option>4th sem</option>
                      <option>5th sem</option>
                      <option>6th sem</option>
                      <option>7th sem</option>
                      <option>8th sem</option>
                    </select>
                  </div>

                  <div class="nice-form-group">
                    <label>Subject code</label>
                    <select name="subcode">
                      <option>Please select the subject code</option>
                      <option>CB-118</option>
                      <option>OS-122</option>
                      <option>AK-125</option>
                    </select>
                  </div>

                  <div class="nice-form-group">
                    <label>Branch</label>
                    <select name="branch">
                      <option>Please select the Branch</option>
                      <option>CB-118</option>
                      <option>OS-122</option>
                      <option>AK-125</option>
                    </select>
                  </div>

                  <details>
                    <summary>
                      <a href="#date">
                        <div class="toggle-code">Next</div>
                      </a>
                    </summary>
                    <script src="https://gist.github.com/nielsVoogt/a00c2c8b6b7acfacce6d50926379e722.js"></script>
                  </details>
                </section>
                <section>
                  <div class="href-target" id="date"></div>
                  <h1>
                    <svg
                      xmlns="http://www.w3.org/2000/svg"
                      width="24"
                      height="24"
                      viewBox="0 0 24 24"
                      fill="none"
                      stroke="currentColor"
                      stroke-width="2"
                      stroke-linecap="round"
                      stroke-linejoin="round"
                      class="feather feather-calendar"
                    >
                      <rect x="3" y="4" width="18" height="18" rx="2" ry="2" />
                      <line x1="16" y1="2" x2="16" y2="6" />
                      <line x1="8" y1="2" x2="8" y2="6" />
                      <line x1="3" y1="10" x2="21" y2="10" />
                    </svg>
                    Slot details
                  </h1>
                  <p>Please add the slot details of the exam.</p>
                  <div class="nice-form-group">
                    <label>Date</label>
                    <input type="date" name="date" value="2018-07-22" />
                  </div>

                  <div class="nice-form-group">
                    <label>Time</label>
                    <input type="time" name="time" value="13:30" />
                  </div>
                  <div class="nice-form-group">
                    <label>Select Slot</label>
                    <select name="shift">
                      <option>Please select the actual slot of the exam</option>
                      <option>Morning shift</option>
                      <option>Evening shift</option>
                    </select>
                  </div>

                  <details>
                    <summary>
                      <a href="#input-types">
                        <div class="toggle-code">Next</div>
                      </a>
                    </summary>
                    <script src="https://gist.github.com/nielsVoogt/2ae279af287e520f545285b0d7c45828.js"></script>
                  </details>
                </section>

                <section>
                  <div class="href-target" id="input-types"></div>
                  <h1>
                    <svg
                      xmlns="http://www.w3.org/2000/svg"
                      width="24"
                      height="24"
                      viewBox="0 0 24 24"
                      fill="none"
                      stroke="currentColor"
                      stroke-width="2"
                      stroke-linecap="round"
                      stroke-linejoin="round"
                      class="feather feather-align-justify"
                    >
                      <line x1="21" y1="10" x2="3" y2="10" />
                      <line x1="21" y1="6" x2="3" y2="6" />
                      <line x1="21" y1="14" x2="3" y2="14" />
                      <line x1="21" y1="18" x2="3" y2="18" />
                    </svg>
                    Add Email
                  </h1>
                  <p>Please add college Email</p>

                  <!-- <div class="nice-form-group">
                    <label>Select CO (Chapter) </label>
                    <select name="chap">
                      <option>Please select Chapter</option>
                      <option>Chapter 1</option>
                      <option>Chapter 2</option>
                      <option>Chapter 3</option>
                      <option>Chapter 4</option>
                      <option>Chapter 5</option>
                      <option>Chapter 6</option>
                    </select>
                  </div> -->

                  <div class="nice-form-group">
                    <label>College Email</label>
                    <textarea
                      rows="5"
                      placeholder="Add emails for the college to shoot paper link...."
                      name="ques"
                    ></textarea>
                  </div>

                  <!-- <div class="nice-form-group">
                    <label>Marks</label>
                    <select name="marks">
                      <option>
                        Please select Marks associated to your question
                      </option>
                      <option>5 marks</option>
                      <option>10 marks</option>
                    </select>
                  </div> -->
                  <details>
                    <summary>
                      <a href="#validation">
                        <div class="toggle-code">Next</div>
                      </a>
                    </summary>
                    <script src="https://gist.github.com/nielsVoogt/e25c9c8f2b8456bbd1239b775d21333f.js"></script>
                  </details>
                </section>

                <!-- <section>
                  <div class="href-target" id="validation"></div>
                  <h1>
                    <svg
                      xmlns="http://www.w3.org/2000/svg"
                      width="24"
                      height="24"
                      viewBox="0 0 24 24"
                      fill="none"
                      stroke="currentColor"
                      stroke-width="2"
                      stroke-linecap="round"
                      stroke-linejoin="round"
                      class="feather feather-alert-triangle"
                    >
                      <path
                        d="M10.29 3.86L1.82 18a2 2 0 0 0 1.71 3h16.94a2 2 0 0 0 1.71-3L13.71 3.86a2 2 0 0 0-3.42 0z"
                      />
                      <line x1="12" y1="9" x2="12" y2="13" />
                      <line x1="12" y1="17" x2="12.01" y2="17" />
                    </svg>
                    Set RBT level
                  </h1>
                  <p>Please add RBT level of the Question asked.</p>
                  <div class="nice-form-group">
                    <label>Select RBT level</label>
                    <select name="rbt">
                      <option>Please select RBT level of the Question</option>
                      <option>Level 1 - Remembering</option>
                      <option>Level 2 - Understanding</option>
                      <option>Level 3 - Applying</option>
                      <option>Level 4 - Analysing</option>
                      <option>Level 5 - Evaluating</option>
                      <option>Level 6 - Creating</option>
                    </select>
                  </div>

                  <div class="nice-form-group">
                    <label>Select diffculty</label>
                    <input type="range" min="0" max="15" />
                  </div>

                  <details>
                    <summary>
                      <button
                        class="toggle-code"
                        style="border: none"
                        type="submit"
                      >
                        Save
                      </button>
                    </summary>
                    <script src="https://gist.github.com/nielsVoogt/f0480b1a2d0deda02138d61ec5c9f4d0.js"></script>
                  </details>
                </section> -->
              </form>
            </main>
          </div>
        </main>
        <footer class="py-4 bg-light mt-auto">
          <div class="container-fluid px-4">
            <div
              class="d-flex align-items-center justify-content-between small"
            >
              <div class="text-muted">
                Copyright &copy; HelpScan 2023.All right reserved.
              </div>
            </div>
          </div>
        </footer>
      </div>
    </div>
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
      crossorigin="anonymous"
    ></script>
    <script src="./assets/js/scripts.js"></script>
    <script
      src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js"
      crossorigin="anonymous"
    ></script>
    <script src="./assets/demo/chart-area-demo.js"></script>
    <script src="./assets/demo/chart-bar-demo.js"></script>
    <script
      src="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/umd/simple-datatables.min.js"
      crossorigin="anonymous"
    ></script>
    <script src="./assets/js/datatables-simple-demo.js"></script>
    <script></script>
  </body>
</html>
