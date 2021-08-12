<?php
include '../templates/header.php';
?>

<body>
  <?php
  include '../templates/navBar.php';
  ?>
  <div class="container">
    <form class="row g-3">
      <div class="col-12">
        <label for="inputName" class="form-label">Nome Completo</label>
        <input type="text" class="form-control" id="inputName" required>
      </div>
      <div class="col-md-6">
        <label for="inputEmail" class="form-label">Email</label>
        <input type="email" class="form-control" id="inputEmail" required>
      </div>
      <div class="col-md-6">
        <label for="inputPassword" class="form-label">Senha</label>
        <input type="text" class="form-control" id="inputPassword" required>
      </div>
      <div class="col-12">
        <label for="inputAddress" class="form-label">Endereço</label>
        <input type="text" class="form-control" id="inputAddress" placeholder="Avenida Getúlio Vargas, n° 222" required>
      </div>
      <div class="col-12">
        <label for="inputComplement" class="form-label">Complemento</label>
        <input type="text" class="form-control" id="inputComplement" placeholder="Apartamento, casa, piso" required>
      </div>
      <div class="col-md-6">
        <label for="inputCity" class="form-label">Cidade</label>
        <input type="text" class="form-control" id="inputCity" required>
      </div>
      <div class="col-md-4">
        <label for="inputState" class="form-label">Estado</label>
        <select id="inputState" class="form-select">
          <option selected>Choose...</option>
          <option>DF</option>
          <option>DF</option>
          <option>ES</option>
          <option>GO</option>
          <option>MG</option>
          <option>PB</option>
          <option>PR</option>
          <option>RS</option>
          <option>SC</option>
          <option>SP</option>
        </select>
      </div>
      <div class="col-md-2">
        <label for="inputZip" class="form-label">Zip</label>
        <input type="text" class="form-control" id="inputZip">
      </div>
      <div class="col-12">
        <div class="form-check">
          <input class="form-check-input" type="checkbox" id="gridCheck" name="checkBoxValidation" required>
          <label class="form-check-label" for="gridCheck">
            Concordar com os termos
          </label>
        </div>
      </div>
      <div class="col-4">
        <button type="button" class="btn btn-primary btnSetItem alert-confirm">Submit</button>
      </div>
      <div class="col-4">
        <button type="button" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#getElementsModal">
          Get Data
        </button>
      </div>
      <div class="col-4">
        <button type="button" class="btn btn-danger btnClearData">
          Clear Data
        </button>
      </div>
    </form>
  </div>

  <!-- Modal for get data -->
  <div class="modal fade" id="getElementsModal" tabindex="-1" role="dialog" aria-labelledby="getElementsModal" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="getElementsModal">Coletar dados do LocalStorage</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <div>Nome: <p id="getElementsModalContent1"></p>
          </div>
          <div>E-mail: <p id="getElementsModalContent2"></p>
          </div>
          <div>Senha: <p id="getElementsModalContent3"></p>
          </div>
          <div>Endereço: <p id="getElementsModalContent4"></p>
          </div>
          <div>Complemento: <p id="getElementsModalContent5"></p>
          </div>
          <div>Cidade: <p id="getElementsModalContent6"></p>
          </div>
          <div>Estado: <p id="getElementsModalContent7"></p>
          </div>
          <div>Zip: <p id="getElementsModalContent8"></p>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary btnGetItem">Get Items</button>
        </div>
      </div>
    </div>
  </div>

  <script src="../assets/libs/jquery/jquery.min.js"></script>
  <script src="../assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  <script src="../js/jquery-project.js"></script>
</body>

<?php
include '../templates/footer.php';
?>