@extends('layouts/contentLayoutMaster')

@section('title', 'User List')

@section('vendor-style')
  {{-- Page Css files --}}
  <link rel="stylesheet" href="{{ asset(mix('vendors/css/forms/select/select2.min.css')) }}">
  <link rel="stylesheet" href="{{ asset(mix('vendors/css/tables/datatable/dataTables.bootstrap5.min.css')) }}">
  <link rel="stylesheet" href="{{ asset(mix('vendors/css/tables/datatable/responsive.bootstrap5.min.css')) }}">
  <link rel="stylesheet" href="{{ asset(mix('vendors/css/tables/datatable/buttons.bootstrap5.min.css')) }}">
  <link rel="stylesheet" href="{{ asset(mix('vendors/css/tables/datatable/rowGroup.bootstrap5.min.css')) }}">
@endsection

@section('page-style')
  {{-- Page Css files --}}
  <link rel="stylesheet" href="{{ asset(mix('css/base/plugins/forms/form-validation.css')) }}">
@endsection

@section('content')
<!-- users list start -->
<section class="app-user-list">
  <div class="row">
    <div class="col-lg-3 col-sm-6">
      <div class="card">
        <div class="card-body d-flex align-items-center justify-content-between">
          <div>
            <h3 class="fw-bolder mb-75">59</h3>
            <span>Total Viaturas</span>
          </div>
          <div class="avatar bg-light-primary p-50">
            <span class="avatar-content">
              <i data-feather="user" class="font-medium-4"></i>
            </span>
          </div>
        </div>
      </div>
    </div>
    <div class="col-lg-3 col-sm-6">
      <div class="card">
        <div class="card-body d-flex align-items-center justify-content-between">
          <div>
            <h3 class="fw-bolder mb-75">67</h3>
            <span>Viaturas alugadas</span>
          </div>
          <div class="avatar bg-light-danger p-50">
            <span class="avatar-content">
              <i data-feather="user-plus" class="font-medium-4"></i>
            </span>
          </div>
        </div>
      </div>
    </div>
    <div class="col-lg-3 col-sm-6">
      <div class="card">
        <div class="card-body d-flex align-items-center justify-content-between">
          <div>
            <h3 class="fw-bolder mb-75">60</h3>
            <span>Viaturas reservadas</span>
          </div>
          <div class="avatar bg-light-success p-50">
            <span class="avatar-content">
              <i data-feather="user-check" class="font-medium-4"></i>
            </span>
          </div>
        </div>
      </div>
    </div>
    <div class="col-lg-3 col-sm-6">
      <div class="card">
        <div class="card-body d-flex align-items-center justify-content-between">
          <div>
            <h3 class="fw-bolder mb-75">7</h3>
            <span>Viaturas disponiveis</span>
          </div>
          <div class="avatar bg-light-warning p-50">
            <span class="avatar-content">
              <i data-feather="user-x" class="font-medium-4"></i>
            </span>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- list and filter start -->
  <div class="card">
    <div class="card-body border-bottom">
      <h4 class="card-title">Pesquisar e Filtrar</h4>
      <div class="row">
        <div class="col-md-4 marca_"></div>
        <div class="col-md-4 modelo_"></div>
        <div class="col-md-4 lot_"></div>
      </div>
    </div>
    <div class="card-datatable table-responsive pt-0">
      <table class="user-list-table table">
        <thead class="table-light">
          <tr>
            <th></th>
            <th>Marca</th>
            <th>Modelo</th>
            <th>Matricula</th>
            <th>Lot</th>
            <th>Kilometragem</th>
            <th>Acção</th>
          </tr>
        </thead>
      </table>
    </div>
    <!-- Modal to add new user starts-->
    <div class="modal modal-slide-in new-user-modal fade" id="modals-slide-in">
      <div class="modal-dialog">
        <form class="add-new-user modal-content pt-0">
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">×</button>
          <div class="modal-header mb-1">
            <h5 class="modal-title" id="exampleModalLabel">Adicionar viatura</h5>
          </div>
          <div class="modal-body flex-grow-1">
            <div class="mb-1">
              <label class="form-label" for="basic-icon-default-fullname">Marca</label>
              <input
                type="text"
                class="form-control dt-full-name"
                id="basic-icon-default-fullname"
                placeholder=""
                name="user-fullname"
              />
            </div>
            <div class="mb-1">
              <label class="form-label" for="basic-icon-default-uname">Modelo</label>
              <input
                type="text"
                id="basic-icon-default-uname"
                class="form-control dt-uname"
                placeholder=""
                name="user-name"
              />
            </div>
            <div class="mb-1">
              <label class="form-label" for="basic-icon-default-email">Matricula</label>
              <input
                type="text"
                id="basic-icon-default-email"
                class="form-control dt-email"
                placeholder=""
                name="user-email"
              />
            </div>
            <div class="mb-1">
              <label class="form-label" for="basic-icon-default-contact">Kilometragem</label>
              <input
                type="text"
                id="basic-icon-default-contact"
                class="form-control dt-contact"
                placeholder=""
                name="user-contact"
              />
            </div>
            <div class="mb-1">
              <label class="form-label" for="basic-icon-default-company">Lotação</label>
              <input
                type="text"
                id="basic-icon-default-company"
                class="form-control dt-contact"
                placeholder=""
                name="user-company"
              />
            </div>
            <div class="mb-1">
              <label class="form-label" for="country">Tipo Combustivel</label>
              <select id="country" class="select2 form-select">
                <option value="Australia">Casolina</option>
                <option value="Bangladesh">Disel</option>
                <option value="Belarus">Gas</option>
              </select>
            </div>

            <div class="mb-1">
              <label class="form-label" for="basic-icon-default-company">Nivel de combustivel</label>
              <input
                type="text"
                id="basic-icon-default-company"
                class="form-control dt-contact"
                placeholder=""
                name="user-company"
              />
            </div>
            <button type="submit" class="btn btn-primary me-1 data-submit">Guardar</button>
            <button type="reset" class="btn btn-outline-secondary" data-bs-dismiss="modal">Cancelar</button>
          </div>
        </form>
      </div>
    </div>
    <!-- Modal to add new user Ends-->
  </div>
  <!-- list and filter end -->
</section>
<!-- users list ends -->
@endsection

@section('vendor-script')
  {{-- Vendor js files --}}
  <script src="{{ asset(mix('vendors/js/forms/select/select2.full.min.js')) }}"></script>
  <script src="{{ asset(mix('vendors/js/tables/datatable/jquery.dataTables.min.js')) }}"></script>
  <script src="{{ asset(mix('vendors/js/tables/datatable/dataTables.bootstrap5.min.js')) }}"></script>
  <script src="{{ asset(mix('vendors/js/tables/datatable/dataTables.responsive.min.js')) }}"></script>
  <script src="{{ asset(mix('vendors/js/tables/datatable/responsive.bootstrap5.js')) }}"></script>
  <script src="{{ asset(mix('vendors/js/tables/datatable/datatables.buttons.min.js')) }}"></script>
  <script src="{{ asset(mix('vendors/js/tables/datatable/jszip.min.js')) }}"></script>
  <script src="{{ asset(mix('vendors/js/tables/datatable/pdfmake.min.js')) }}"></script>
  <script src="{{ asset(mix('vendors/js/tables/datatable/vfs_fonts.js')) }}"></script>
  <script src="{{ asset(mix('vendors/js/tables/datatable/buttons.html5.min.js')) }}"></script>
  <script src="{{ asset(mix('vendors/js/tables/datatable/buttons.print.min.js')) }}"></script>
  <script src="{{ asset(mix('vendors/js/tables/datatable/dataTables.rowGroup.min.js')) }}"></script>
  <script src="{{ asset(mix('vendors/js/forms/validation/jquery.validate.min.js')) }}"></script>
  <script src="{{ asset(mix('vendors/js/forms/cleave/cleave.min.js')) }}"></script>
  <script src="{{ asset(mix('vendors/js/forms/cleave/addons/cleave-phone.us.js')) }}"></script>
@endsection

@section('page-script')
  {{-- Page js files --}}
  <script src="{{ asset(mix('js/scripts/pages/app-car-list.js')) }}"></script>
@endsection
