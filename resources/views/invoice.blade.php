@extends('layout.app')

@section('headerTitle')
    <h1 class="m-0">Invoice</h1>
@endsection

@section('active')
    <li class="nav-item">
        <a href="{{ url('dashboard') }}" class="nav-link">
            <i class="nav-icon fas fa-tachometer-alt"></i>
            <p>
                Dashboard
            </p>
        </a>
    </li>
    <li class="nav-item menu-is-opening menu-open">
        <a href="#" class="nav-link active">
          <i class="nav-icon fas fa-chart-pie"></i>
          <p>
            Report
            <i class="right fas fa-angle-left"></i>
          </p>
        </a>
        <ul class="nav nav-treeview">
          <li class="nav-item">
            <a href="{{ url('chartjs') }}" class="nav-link">
              <i class="far fa-circle nav-icon"></i>
              <p>ChartJS</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{ url('invoice') }}" class="nav-link active">
              <i class="far fa-circle nav-icon"></i>
              <p>Invoice</p>
            </a>
          </li>
        </ul>
      </li>
    <li class="nav-item">
        <a class="nav-link" href="http://20.20.23.71:8000/feedback-client/public/feedback?logsNumber=2024-00001"
            class="nav-link">
            <i class="nav-icon fas fa-th"></i>
            <p>
                Feedback Client
                <span class="right badge badge-danger">New</span>
            </p>
        </a>
    </li>
@endsection

@section('content')
    <!-- Main content -->
    <div class="invoice p-3 mb-3">
        <!-- title row -->
        <div class="row">
          <div class="col-12">
            <h4>
              <i class="fas fa-globe"></i> AdminLTE, Inc.
              <small class="float-right">Date: 2/10/2014</small>
            </h4>
          </div>
          <!-- /.col -->
        </div>
        <!-- info row -->
        <div class="row invoice-info">
          <div class="col-sm-4 invoice-col">
            From
            <address>
              <strong>Admin, Inc.</strong><br>
              795 Folsom Ave, Suite 600<br>
              San Francisco, CA 94107<br>
              Phone: (804) 123-5432<br>
              Email: info@almasaeedstudio.com
            </address>
          </div>
          <!-- /.col -->
          <div class="col-sm-4 invoice-col">
            To
            <address>
              <strong>John Doe</strong><br>
              795 Folsom Ave, Suite 600<br>
              San Francisco, CA 94107<br>
              Phone: (555) 539-1037<br>
              Email: john.doe@example.com
            </address>
          </div>
          <!-- /.col -->
          <div class="col-sm-4 invoice-col">
            <b>Invoice #007612</b><br>
            <br>
            <b>Order ID:</b> 4F3S8J<br>
            <b>Payment Due:</b> 2/22/2014<br>
            <b>Account:</b> 968-34567
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->

        <!-- Table row -->
        <div class="row">
          <div class="col-12 table-responsive">
            <table class="table table-striped">
              <thead>
              <tr>
                <th>Qty</th>
                <th>Product</th>
                <th>Serial #</th>
                <th>Description</th>
                <th>Subtotal</th>
              </tr>
              </thead>
              <tbody>
              <tr>
                <td>1</td>
                <td>Call of Duty</td>
                <td>455-981-221</td>
                <td>El snort testosterone trophy driving gloves handsome</td>
                <td>$64.50</td>
              </tr>
              <tr>
                <td>1</td>
                <td>Need for Speed IV</td>
                <td>247-925-726</td>
                <td>Wes Anderson umami biodiesel</td>
                <td>$50.00</td>
              </tr>
              <tr>
                <td>1</td>
                <td>Monsters DVD</td>
                <td>735-845-642</td>
                <td>Terry Richardson helvetica tousled street art master</td>
                <td>$10.70</td>
              </tr>
              <tr>
                <td>1</td>
                <td>Grown Ups Blue Ray</td>
                <td>422-568-642</td>
                <td>Tousled lomo letterpress</td>
                <td>$25.99</td>
              </tr>
              </tbody>
            </table>
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->

        <div class="row">
          <!-- accepted payments column -->
          <div class="col-6">
            <p class="lead">Payment Methods:</p>
            <img src="../../dist/img/credit/visa.png" alt="Visa">
            <img src="../../dist/img/credit/mastercard.png" alt="Mastercard">
            <img src="../../dist/img/credit/american-express.png" alt="American Express">
            <img src="../../dist/img/credit/paypal2.png" alt="Paypal">

            <p class="text-muted well well-sm shadow-none" style="margin-top: 10px;">
              Etsy doostang zoodles disqus groupon greplin oooj voxy zoodles, weebly ning heekya handango imeem
              plugg
              dopplr jibjab, movity jajah plickers sifteo edmodo ifttt zimbra.
            </p>
          </div>
          <!-- /.col -->
          <div class="col-6">
            <p class="lead">Amount Due 2/22/2014</p>

            <div class="table-responsive">
              <table class="table">
                <tr>
                  <th style="width:50%">Subtotal:</th>
                  <td>$250.30</td>
                </tr>
                <tr>
                  <th>Tax (9.3%)</th>
                  <td>$10.34</td>
                </tr>
                <tr>
                  <th>Shipping:</th>
                  <td>$5.80</td>
                </tr>
                <tr>
                  <th>Total:</th>
                  <td>$265.24</td>
                </tr>
              </table>
            </div>
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->

        <!-- this row will not appear when printing -->
        <div class="row no-print">
          <div class="col-12">
            <a href="invoice-print.html" rel="noopener" target="_blank" class="btn btn-default"><i class="fas fa-print"></i> Print</a>
            <button type="button" class="btn btn-success float-right"><i class="far fa-credit-card"></i> Submit
              Payment
            </button>
            <button type="button" class="btn btn-primary float-right" style="margin-right: 5px;">
              <i class="fas fa-download"></i> Generate PDF
            </button>
          </div>
        </div>
      </div>
      <!-- /.invoice -->
@endsection
