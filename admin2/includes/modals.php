  <!-- Reservation Modals -->

  <div class="modal fade" id="reservationModal1" tabindex="-1" aria-labelledby="reservationModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="reservationModalLabel">
            Make a Reservation
          </h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <p class="lead">
            Choose your preferred contact method:
          </p>
          <div class="d-grid gap-2">
            <a href="tel:<?php echo $rest1row['phone'];?>" class="btn btn-primary">
              <i class="fas fa-phone-alt me-2"></i>Call Us [<?php echo $rest1row['phone'];?>]
            </a>
            <a href="https://wa.me/<?php echo $rest1row['whatsapp'];?>" target="_blank" class="btn btn-success">
              <i class="fab fa-whatsapp me-2"></i>WhatsApp Chat [<?php echo $rest1row['whatsapp'];?>]
            </a>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="modal fade" id="reservationModal2" tabindex="-1" aria-labelledby="reservationModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="reservationModalLabel">
            Make a Reservation
          </h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <p class="lead">
            Choose your preferred contact method:
          </p>
          <div class="d-grid gap-2">
            <a href="tel:<?php echo $rest2row['phone'];?>" class="btn btn-primary">
              <i class="fas fa-phone-alt me-2"></i>Call Us [<?php echo $rest2row['phone'];?>]
            </a>
            <a href="https://wa.me/<?php echo $rest2row['whatsapp'];?>" target="_blank" class="btn btn-success">
              <i class="fab fa-whatsapp me-2"></i>WhatsApp Chat [<?php echo $rest2row['whatsapp'];?>]
            </a>
          </div>
        </div>
      </div>
    </div>
  </div>


  <div class="modal fade" id="reservationModal3" tabindex="-1" aria-labelledby="reservationModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="reservationModalLabel">
            Make a Reservation
          </h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <p class="lead">
            Choose your preferred contact method:
          </p>
          <div class="d-grid gap-2">
            <a href="tel:<?php echo $rest3row['phone'];?>" class="btn btn-primary">
              <i class="fas fa-phone-alt me-2"></i>Call Us [<?php echo $rest3row['phone'];?>]
            </a>
            <a href="https://wa.me/<?php echo $rest3row['whatsapp'];?>" target="_blank" class="btn btn-success">
              <i class="fab fa-whatsapp me-2"></i>WhatsApp Chat [<?php echo $rest3row['whatsapp'];?>]
            </a>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Order Modal -->
  <div class="modal fade" id="orderModal1" tabindex="-1" aria-labelledby="orderModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="orderModalLabel">Make an Order</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <p class="lead">Choose your preferred delivery service:</p>
          <div class="d-grid gap-2">

            <?php if($rest1row['uber'] != ""){?>
            <a href="<?php echo $rest1row['uber'];?>" target="_blank" class="btn btn-dark text-white d-flex align-items-center justify-content-center mb-3" style="background-color: black;">
              <img class="me-2" src="assets/img/uber-eats.png" alt="Uber Eats" width="35" height="35" />
              <span class="fs-6">Order with Uber</span>
            </a>

            <?php } if($rest1row['glovo'] != ""){?>


            <a href="<?php echo $rest1row['glovo'];?>" target="_blank" class="btn btn-glovo text-black d-flex align-items-center justify-content-center mb-3" style="background-color: #fdc151;">
              <img class="me-2" src="assets/img/glovoapp-icon.svg" alt="Glovo" width="35" height="35" />
              <span class="fs-6">Order with Glovo</span>
            </a>

            <?php } if($rest1row['little'] != ""){?>

            <a href="<?php echo $rest1row['little'];?>" target="_blank" class="btn btn-white text-black d-flex align-items-center justify-content-center mb-3" style="background-color: white;">
              <img class="me-2" src="assets/img/little.jpg" alt="Little" width="35" height="35" />
              <span class="fs-6">Order with Little</span>
            </a>

            <?php } if($rest1row['bolt'] != ""){?>

            <a href="<?php echo $rest1row['bolt'];?>" target="_blank" class="btn text-white d-flex align-items-center justify-content-center mb-3" style="background-color: #15d477; padding: 15px;">
              <img class="me-2" src="assets/img/bolt-logo-2.png" alt="Icon" width="35" height="35">
              <span class="fs-6">Order with Bolt</span>
            </a>

            <?php } ?>

          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="modal fade" id="orderModal2" tabindex="-1" aria-labelledby="orderModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="orderModalLabel">Make an Order</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <p class="lead">Choose your preferred delivery service:</p>
          <div class="d-grid gap-2">

            <?php if($rest2row['uber'] != ""){?>
            <a href="<?php echo $rest2row['uber'];?>" target="_blank" class="btn btn-dark text-white d-flex align-items-center justify-content-center mb-3" style="background-color: black;">
              <img class="me-2" src="assets/img/uber-eats.png" alt="Uber Eats" width="35" height="35" />
              <span class="fs-6">Order with Uber</span>
            </a>

            <?php } if($rest2row['glovo'] != ""){?>


            <a href="<?php echo $rest2row['glovo'];?>" target="_blank" class="btn btn-glovo text-black d-flex align-items-center justify-content-center mb-3" style="background-color: #fdc151;">
              <img class="me-2" src="assets/img/glovoapp-icon.svg" alt="Glovo" width="35" height="35" />
              <span class="fs-6">Order with Glovo</span>
            </a>

            <?php } if($rest2row['little'] != ""){?>

            <a href="<?php echo $rest2row['little'];?>" target="_blank" class="btn btn-white text-black d-flex align-items-center justify-content-center mb-3" style="background-color: white;">
              <img class="me-2" src="assets/img/little.jpg" alt="Little" width="35" height="35" />
              <span class="fs-6">Order with Little</span>
            </a>

            <?php } if($rest2row['bolt'] != ""){?>

            <a href="<?php echo $rest2row['bolt'];?>" target="_blank" class="btn text-white d-flex align-items-center justify-content-center mb-3" style="background-color: #15d477; padding: 15px;">
              <img class="me-2" src="assets/img/bolt-logo-2.png" alt="Icon" width="35" height="35">
              <span class="fs-6">Order with Bolt</span>
            </a>

            <?php } ?>

          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="modal fade" id="orderModal3" tabindex="-1" aria-labelledby="orderModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="orderModalLabel">Make an Order</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <p class="lead">Choose your preferred delivery service:</p>
          <div class="d-grid gap-2">

            <?php if($rest3row['uber'] != ""){?>
            <a href="<?php echo $rest3row['uber'];?>" target="_blank" class="btn btn-dark text-white d-flex align-items-center justify-content-center mb-3" style="background-color: black;">
              <img class="me-2" src="assets/img/uber-eats.png" alt="Uber Eats" width="35" height="35" />
              <span class="fs-6">Order with Uber</span>
            </a>

            <?php } if($rest3row['glovo'] != ""){?>


            <a href="<?php echo $rest3row['glovo'];?>" target="_blank" class="btn btn-glovo text-black d-flex align-items-center justify-content-center mb-3" style="background-color: #fdc151;">
              <img class="me-2" src="assets/img/glovoapp-icon.svg" alt="Glovo" width="35" height="35" />
              <span class="fs-6">Order with Glovo</span>
            </a>

            <?php } if($rest3row['little'] != ""){?>

            <a href="<?php echo $rest3row['little'];?>" target="_blank" class="btn btn-white text-black d-flex align-items-center justify-content-center mb-3" style="background-color: white;">
              <img class="me-2" src="assets/img/little.jpg" alt="Little" width="35" height="35" />
              <span class="fs-6">Order with Little</span>
            </a>

            <?php } if($rest3row['bolt'] != ""){?>

            <a href="<?php echo $rest3row['bolt'];?>" target="_blank" class="btn text-white d-flex align-items-center justify-content-center mb-3" style="background-color: #15d477; padding: 15px;">
              <img class="me-2" src="assets/img/bolt-logo-2.png" alt="Icon" width="35" height="35">
              <span class="fs-6">Order with Bolt</span>
            </a>

            <?php } ?>

          </div>
        </div>
      </div>
    </div>
  </div>



  <!-- Google Maps Location Modals -->
  <div class="modal fade" id="locationModal1" tabindex="-1" aria-labelledby="locationModalLabel1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="locationModalLabel1"><?php echo $rest1row['name'];?> Location</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
        <?php echo $rest1row['map'];?>
        </div>
      </div>
    </div>
  </div>

  <div class="modal fade" id="locationModal2" tabindex="-1" aria-labelledby="locationModalLabel2" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="locationModalLabel2"><?php echo $rest2row['name'];?> Location</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
        <?php echo $rest2row['map'];?>
        </div>
      </div>
    </div>
  </div>

  <div class="modal fade" id="locationModal3" tabindex="-1" aria-labelledby="locationModalLabel3" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="locationModalLabel3"><?php echo $rest3row['name'];?> Location</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
        <?php echo $rest3row['map'];?>
        </div>
      </div>
    </div>
  </div>

