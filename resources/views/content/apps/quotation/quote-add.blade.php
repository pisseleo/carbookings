@extends('layouts/contentLayoutMaster')

@section('title', 'Invoice Edit')

@section('vendor-style')
<link rel="stylesheet" href="{{asset('vendors/css/pickers/flatpickr/flatpickr.min.css')}}">
<link rel="stylesheet" href="{{asset('vendors/css/forms/select/select2.min.css')}}">
@endsection
@section('page-style')
<link rel="stylesheet" href="{{asset('css/base/plugins/forms/pickers/form-flat-pickr.css')}}">
<link rel="stylesheet" href="{{asset('css/base/pages/app-invoice.css')}}">
@endsection

@section('content')
<section class="invoice-add-wrapper">
  <div class="row invoice-add">
    <!-- Invoice Add Left starts -->
    <div class="col-xl-9 col-md-8 col-12">
      <div class="card invoice-preview-card">
        <!-- Header starts -->
        <div class="card-body invoice-padding pb-0">
          <div class="d-flex justify-content-between flex-md-row flex-column invoice-spacing mt-0">
            <div>
              <div class="logo-wrapper">
                <svg
                  viewBox="0 0 139 95"
                  version="1.1"
                  xmlns="http://www.w3.org/2000/svg"
                  xmlns:xlink="http://www.w3.org/1999/xlink"
                  height="24"
                >
                  <defs>
                    <linearGradient id="invoice-linearGradient-1" x1="100%" y1="10.5120544%" x2="50%" y2="89.4879456%">
                      <stop stop-color="#000000" offset="0%"></stop>
                      <stop stop-color="#FFFFFF" offset="100%"></stop>
                    </linearGradient>
                    <linearGradient
                      id="invoice-linearGradient-2"
                      x1="64.0437835%"
                      y1="46.3276743%"
                      x2="37.373316%"
                      y2="100%"
                    >
                      <stop stop-color="#EEEEEE" stop-opacity="0" offset="0%"></stop>
                      <stop stop-color="#FFFFFF" offset="100%"></stop>
                    </linearGradient>
                  </defs>
                  <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                    <g transform="translate(-400.000000, -178.000000)">
                      <g transform="translate(400.000000, 178.000000)">
                        <path
                          class="text-primary"
                          d="M-5.68434189e-14,2.84217094e-14 L39.1816085,2.84217094e-14 L69.3453773,32.2519224 L101.428699,2.84217094e-14 L138.784583,2.84217094e-14 L138.784199,29.8015838 C137.958931,37.3510206 135.784352,42.5567762 132.260463,45.4188507 C128.736573,48.2809251 112.33867,64.5239941 83.0667527,94.1480575 L56.2750821,94.1480575 L6.71554594,44.4188507 C2.46876683,39.9813776 0.345377275,35.1089553 0.345377275,29.8015838 C0.345377275,24.4942122 0.230251516,14.560351 -5.68434189e-14,2.84217094e-14 Z"
                          style="fill: currentColor"
                        ></path>
                        <path
                          d="M69.3453773,32.2519224 L101.428699,1.42108547e-14 L138.784583,1.42108547e-14 L138.784199,29.8015838 C137.958931,37.3510206 135.784352,42.5567762 132.260463,45.4188507 C128.736573,48.2809251 112.33867,64.5239941 83.0667527,94.1480575 L56.2750821,94.1480575 L32.8435758,70.5039241 L69.3453773,32.2519224 Z"
                          fill="url(#invoice-linearGradient-1)"
                          opacity="0.2"
                        ></path>
                        <polygon
                          fill="#000000"
                          opacity="0.049999997"
                          points="69.3922914 32.4202615 32.8435758 70.5039241 54.0490008 16.1851325"
                        ></polygon>
                        <polygon
                          fill="#000000"
                          opacity="0.099999994"
                          points="69.3922914 32.4202615 32.8435758 70.5039241 58.3683556 20.7402338"
                        ></polygon>
                        <polygon
                          fill="url(#invoice-linearGradient-2)"
                          opacity="0.099999994"
                          points="101.428699 0 83.0667527 94.1480575 130.378721 47.0740288"
                        ></polygon>
                      </g>
                    </g>
                  </g>
                </svg>
                <h3 class="text-primary invoice-logo">Pfuxela Exhibitions</h3>
              </div>
              <p class="card-text mb-25">Av. Paulo Samuel kankhomba Nº2164</p>
              <p class="card-text mb-25">Maputo, Alto-maé</p>
              <p class="card-text mb-0">+258 (84) 3214179, +258 (21) 320888</p>
            </div>
            <div class="invoice-number-date mt-md-0 mt-2">
              <div class="d-flex align-items-center justify-content-md-end mb-1">
                <h4 class="invoice-title">Cotação</h4>
                <div class="input-group input-group-merge invoice-edit-input-group">
                  <div class="input-group-text">
                    <i data-feather="hash"></i>
                  </div>
                  <input type="text" class="form-control invoice-edit-input" placeholder="53634" />
                </div>
              </div>
              <div class="d-flex align-items-center mb-1">
                <span class="title">Data:</span>
                <input type="text" class="form-control invoice-edit-input date-picker" />
              </div>
              <div class="d-flex align-items-center">
                <span class="title">Validade:</span>
                <input type="text" class="form-control invoice-edit-input due-date-picker" />
              </div>
            </div>
          </div>
        </div>
        <!-- Header ends -->

        <hr class="invoice-spacing" />

        <!-- Address and Contact starts -->
        <div class="card-body invoice-padding pt-0">
          <div class="row row-bill-to invoice-spacing">
            <div class="col-xl-8 mb-lg-1 col-bill-to ps-0">
              <h6 class="invoice-to-title">Para:</h6>
              <div class="invoice-customer">
                <select class="invoiceto form-select">
                  <option></option>
                  <option value="shelby">Feliciano Cossa</option>
                  <option value="hunters">Mouzinho Zacarias</option>
                </select>
              </div>
            </div>
            <div class="col-xl-4 p-0 ps-xl-2 mt-xl-0 mt-2">
              <h6 class="mb-2">Detalhes de pagamento:</h6>
              <table>
                <tbody>
                  <tr>
                    <td class="pe-1">Total:</td>
                    <td><strong>1850.55 MZN</strong></td>
                  </tr>
                  <tr>
                    <td class="pe-1">Banco:</td>
                    <td>BCI</td>
                  </tr>
                  <tr>
                    <td class="pe-1">NIB:</td>
                    <td>10000033434342</td>
                  </tr>
                  <tr>
                    <td class="pe-1">IBAN:</td>
                    <td>ETD95476213874685</td>
                  </tr>
                  <tr>
                    <td class="pe-1">SWIFT:</td>
                    <td>BR91905</td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
        </div>
        <!-- Address and Contact ends -->

        <!-- Product Details starts -->
        <div class="card-body invoice-padding invoice-product-details">
          <form class="source-item">
            <div data-repeater-list="group-a">
              <div class="repeater-wrapper" data-repeater-item>
                <div class="row">
                  <div class="col-12 d-flex product-details-border position-relative pe-0">
                    <div class="row w-100 pe-lg-0 pe-1 py-2">
                      <div class="col-lg-5 col-12 mb-lg-0 mb-2 mt-lg-0 mt-2">
                        <p class="card-text col-title mb-md-50 mb-0">Viatura</p>
                        <select class="form-select item-details">
                          <option value="App Design">Honda Accord AAU 3443</option>
                          <option value="App Customization">Toyota Coaster AAr 873</option>
                          <option value="ABC Template"selected>Toyota Hiace AAY 322</option>
                          <option value="App Development">Toyota Runx AAY 3232</option>
                        </select>
                        <textarea class="form-control mt-2" rows="1">Descrição</textarea>
                      </div>
                      <div class="col-lg-3 col-12 my-lg-0 my-2">
                        <p class="card-text col-title mb-md-2 mb-0">preço/km</p>
                        <input type="text" class="form-control" value="240" placeholder="preço/km" />
                        <input type="text" class="form-control mt-2" value="" placeholder="Adultos" />
                      </div>
                      <div class="col-lg-2 col-12 my-lg-0 my-2">
                        <p class="card-text col-title mb-md-2 mb-0">KM</p>
                        <input type="number" class="form-control" value="0" placeholder="0" />
                        <input type="text" class="form-control mt-2" value="" placeholder="Crianças" />
                      </div>
                      <div class="col-lg-2 col-12 mt-lg-0 mt-2">
                        <p class="card-text col-title mb-md-50 mb-0">Total</p>
                        <p class="card-text mb-0">16024.00</p>
                      </div>
                    </div>
                    <div
                      class="
                        d-flex
                        flex-column
                        align-items-center
                        justify-content-between
                        border-start
                        invoice-product-actions
                        py-50
                        px-25
                      "
                    >
                      <i data-feather="x" class="cursor-pointer font-medium-3" data-repeater-delete></i>
                      <div class="dropdown">
                        <i
                          class="cursor-pointer more-options-dropdown me-0"
                          data-feather="settings"
                          id="dropdownMenuButton"
                          role="button"
                          data-bs-toggle="dropdown"
                          aria-haspopup="true"
                          aria-expanded="false"
                        >
                        </i>
                        <div
                          class="dropdown-menu dropdown-menu-end item-options-menu p-50"
                          aria-labelledby="dropdownMenuButton"
                        >
                          <div class="mb-1">
                            <label for="discount-input" class="form-label">Desconto(%)</label>
                            <input type="number" class="form-control" id="discount-input" />
                          </div>
                          <div class="form-row mt-50">
                            <div class="mb-1 col-md-6">
                              <label for="tax-1-input" class="form-label">IVA</label>
                              <select name="tax-1-input" id="tax-1-input" class="form-select tax-select">
                                <option value="0%" selected>0%</option>
                                <option value="1%">17%</option>
                                <option value="10%">21%</option>
                              </select>
                            </div>
                            <div class="mb-1 col-md-6">
                              <label for="tax-2-input" class="form-label">Taxa 2</label>
                              <select name="tax-2-input" id="tax-2-input" class="form-select tax-select">
                                <option value="0%" selected>0%</option>
                                <option value="1%">1%</option>
                                <option value="10%">10%</option>
                                <option value="18%">18%</option>
                                <option value="40%">40%</option>
                              </select>
                            </div>
                          </div>
                          <div class="dropdown-divider my-1"></div>
                          <div class="d-flex justify-content-between">
                            <button type="button" class="btn btn-outline-primary btn-apply-changes">Aplicar</button>
                            <button type="button" class="btn btn-outline-secondary">Cancelar</button>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="row mt-1">
              <div class="col-12 px-0">
                <button type="button" class="btn btn-primary btn-sm btn-add-new" data-repeater-create>
                  <i data-feather="plus" class="me-25"></i>
                  <span class="align-middle">Adicionar Item</span>
                </button>
              </div>
            </div>
          </form>
        </div>
        <!-- Product Details ends -->

        <!-- Invoice Total starts -->
        <div class="card-body invoice-padding">
          <div class="row invoice-sales-total-wrapper">
            <div class="col-md-6 order-md-1 order-2 mt-md-0 mt-3">
              <div class="d-flex align-items-center mb-1">
                <label for="salesperson" class="form-label">Funcionario:</label>
                <input type="text" class="form-control ms-50" id="salesperson" placeholder="Nome completo" />
              </div>
            </div>
            <div class="col-md-6 d-flex justify-content-end order-md-2 order-1">
              <div class="invoice-total-wrapper">
                <div class="invoice-total-item">
                  <p class="invoice-total-title">Subtotal:</p>
                  <p class="invoice-total-amount">16800 MZN</p>
                </div>
                <div class="invoice-total-item">
                  <p class="invoice-total-title">Desconto:</p>
                  <p class="invoice-total-amount">0 MZN</p>
                </div>
                <div class="invoice-total-item">
                  <p class="invoice-total-title">IVA:</p>
                  <p class="invoice-total-amount">17%</p>
                </div>
                <hr class="my-50" />
                <div class="invoice-total-item">
                  <p class="invoice-total-title">Total:</p>
                  <p class="invoice-total-amount">16800 MZN</p>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- Invoice Total ends -->

        <hr class="invoice-spacing mt-0" />

        <div class="card-body invoice-padding py-0">
          <!-- Invoice Note starts -->
          <div class="row">
            <div class="col-12">
              <div class="mb-2">
                <label for="note" class="form-label fw-bold">Nota:</label>
                <textarea class="form-control" rows="2" id="note">
                  Foi um prazer trabalhar com você e sua equipe. Esperamos que você nos mantenha em mente para futuros projectos. Obrigado!</textarea
                >
              </div>
            </div>
          </div>
          <!-- Invoice Note ends -->
        </div>
      </div>
    </div>
    <!-- Invoice Add Left ends -->

    <!-- Invoice Add Right starts -->
    <div class="col-xl-3 col-md-4 col-12">
      <div class="card">
        <div class="card-body">
          <button class="btn btn-primary w-100 mb-75" disabled>Enviar cotação</button>
          <a href="{{url('app/invoice/preview')}}" class="btn btn-outline-primary w-100 mb-75">Previsualizar</a>
          <button type="button" class="btn btn-outline-primary w-100">Guardar</button>
        </div>
      </div>
      <div class="mt-2">
        <p class="mb-50">Métodos de pagamento</p>
        <select class="form-select">
          <option value="Bank Account">Transferência bancaria</option>
          <option value="Paypal">M-Pesa</option>
          <option value="UPI Transfer">Cash</option>
        </select>
        <div class="invoice-terms mt-1">
          <div class="d-flex justify-content-between">
            <label class="invoice-terms-title mb-0" for="paymentTerms">Termos de pagamento</label>
            <div class="form-check form-switch">
              <input type="checkbox" class="form-check-input" checked id="paymentTerms" />
              <label class="form-check-label" for="paymentTerms"></label>
            </div>
          </div>
          <div class="d-flex justify-content-between py-1">
            <label class="invoice-terms-title mb-0" for="clientNotes">Nota de clientes</label>
            <div class="form-check form-switch">
              <input type="checkbox" class="form-check-input" checked id="clientNotes" />
              <label class="form-check-label" for="clientNotes"></label>
            </div>
          </div>
          <div class="d-flex justify-content-between">
            <label class="invoice-terms-title mb-0" for="paymentStub">Comprovativo</label>
            <div class="form-check form-switch">
              <input type="checkbox" class="form-check-input" id="paymentStub" />
              <label class="form-check-label" for="paymentStub"></label>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Invoice Add Right ends -->
  </div>

  <!-- Add New Customer Sidebar -->
  <div class="modal modal-slide-in fade" id="add-new-customer-sidebar" aria-hidden="true">
    <div class="modal-dialog sidebar-lg">
      <div class="modal-content p-0">
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">×</button>
        <div class="modal-header mb-1">
          <h5 class="modal-title">
            <span class="align-middle">Add Customer</span>
          </h5>
        </div>
        <div class="modal-body flex-grow-1">
          <form>
            <div class="mb-1">
              <label for="customer-name" class="form-label">Customer Name</label>
              <input type="text" class="form-control" id="customer-name" placeholder="John Doe" />
            </div>
            <div class="mb-1">
              <label for="customer-email" class="form-label">Email</label>
              <input type="email" class="form-control" id="customer-email" placeholder="example@domain.com" />
            </div>
            <div class="mb-1">
              <label for="customer-address" class="form-label">Customer Address</label>
              <textarea
                class="form-control"
                id="customer-address"
                cols="2"
                rows="2"
                placeholder="1307 Lady Bug Drive New York"
              ></textarea>
            </div>
            <div class="mb-1 position-relative">
              <label for="customer-country" class="form-label">Country</label>
              <select class="form-select" id="customer-country" name="customer-country">
                <option label="select country"></option>
                <option value="Australia">Australia</option>
                <option value="Canada">Canada</option>
                <option value="Russia">Russia</option>
                <option value="Saudi Arabia">Saudi Arabia</option>
                <option value="Singapore">Singapore</option>
                <option value="Sweden">Sweden</option>
                <option value="Switzerland">Switzerland</option>
                <option value="United Kingdom">United Kingdom</option>
                <option value="United Arab Emirates">United Arab Emirates</option>
                <option value="United States of America">United States of America</option>
              </select>
            </div>
            <div class="mb-1">
              <label for="customer-contact" class="form-label">Contact</label>
              <input type="number" class="form-control" id="customer-contact" placeholder="763-242-9206" />
            </div>
            <div class="mb-1 d-flex flex-wrap mt-2">
              <button type="button" class="btn btn-primary me-1" data-bs-dismiss="modal">Add</button>
              <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">Cancel</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
  <!-- /Add New Customer Sidebar -->
</section>
@endsection

@section('vendor-script')
<script src="{{asset('vendors/js/forms/repeater/jquery.repeater.min.js')}}"></script>
<script src="{{asset('vendors/js/forms/select/select2.full.min.js')}}"></script>
<script src="{{asset('vendors/js/pickers/flatpickr/flatpickr.min.js')}}"></script>
@endsection

@section('page-script')
<script src="{{asset('js/scripts/pages/app-quote.js')}}"></script>
@endsection
