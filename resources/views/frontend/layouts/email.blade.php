<div class="offset-xl-2 col-xl-8 col-lg-12 col-md-12 col-sm-12 col-12 padding">
    <div class="offset-xl-2 col-xl-8 col-lg-12 col-md-12 col-sm-12 col-12 padding">
        <div class="naimacard">
            <div class="cardheader p-4">
                <a class="pt-2 d-inline-block" href="index.html" data-abc="true">BBBootstrap.com</a>
                <div class="float-right">
                    <h3 class="mb-0">Invoice #BBB10234</h3>
                    <strong>Date:{{ $appointmentData->updated_at }}</strong>
                </div>
                <div class="card-body">
                    {{-- <div class="row mb-4">
                        <div class="col-sm-6">
                            <h6 class="mb-3">From:</h6>
                            <div><strong>Diagnostic Center</strong></div>
                            <div>Uttara,Dhaka</div>
                            <div>Email: diagnostic@gmail.com</div>
                            <div>Phone: +8801784438727</div>
                        </div>

                        <div class="col-sm-6">
                            <h6 class="mb-3">To:</h6>
                            <div><strong>Patient ID:{{ auth()->user()->name }}</strong></div>
                            <div><strong>Doctor Name:{{ $appointmentData->doctors_name  }}</strong>
                            </div>
                            <div>Email:{{ auth()->user()->email }}</div>
                            <div>Phone:{{ auth()->user()->contact_no }}</div>
                        </div>
                    </div> --}}

                    <table style="width:100%;margin:20px 0 20px 20px;">
                        <tr>
                            <td>From:</td>
                            <td>To:</td>

                        </tr>
                        <tr>
                            <td>Diagnostic Center</td>
                            <td>Patient ID:{{ auth()->user()->name }}</td>
                        </tr>
                        <tr>
                            <td>Uttara,Dhaka</td>
                            <td>Doctor Name:{{ $appointmentData->doctors_name  }}</td>
                        </tr>
                        <tr>
                            <td>Email: diagnostic@gmail.com</td>
                            <td>Email:{{ auth()->user()->email }}</td>
                        </tr>
                        <tr>
                            <td>Phone: +8801784438727</td>
                            <td>Phone:{{ auth()->user()->contact_no }}</td>
                        </tr>
                    </table>


                    <div class="table-responsive-sm">
                        <div class="table-responsive-sm">
                            <table class="table table-striped" style="border: 1px solid #ddd;width:100%;">
                                <thead>
                                    <tr style="border: 1px solid #ddd">
                                        <th>#</th>
                                        <th>Test Name</th>
                                       <th>Unit Cost</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($appointmentData->tests as $key=>$data )

                                        <tr>
                                            <td style="text-align:center">{{ $key + 1 }}</td>

                                            <td  style="text-align:center">
                                                @isset($data->test_name)
                                                {{ $data->test_name }}
                                                @endisset</td>
                                            <td  style="text-align:center">
                                                @isset($data->test_price)
                                                {{ $data->test_price }}
                                                @endisset</td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                        <div class="row">
                            <div class="col-lg-4 col-sm-5"></div>

                            <div class="col-lg-4 col-sm-5 ml-auto" style="display: flex;justify-content:flex-end;margin:20px 20px 20px 0">
                                <table class="table table-clear">
                                    <tbody>
                                        <tr>
                                            <td class="left">
                                                <strong>Total </strong>
                                            </td>
                                            <td class="right">{{ $appointmentData->tests->sum('test_price') }}</td>
                                        </tr>
                                        <tr>
                                            <td class="left">
                                                <strong>Total Pay</strong>
                                            </td>
                                            <td class="right">{{ $appointmentData->paymentstatus->amount }}</td>
                                        </tr>
                                        <tr>
                                            <td class="left">
                                                <strong>VAT (0.00%)</strong>
                                            </td>
                                            <td class="right">0.00</td>
                                        </tr>
                                        <tr>
                                            <td class="left">
                                        <tr>
                                            <td class="left">
                                                <strong>Total Due Amount</strong>
                                            </td>
                                            <td class="right">{{ $appointmentData->due_amount }}</td>
                                        </tr>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer bg-white">
                        <p class="mb-0">Diagnostic Center, Uttara,Dhaka 110034</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

{{-- <div class="container">
    <div class="card">
        <div class="card-header">
            Invoice

            <div class="col-sm-6">


                <strong>Date:{{ $appointmentData->updated_at }}</strong>
        </div>
        <div class="card-body">
            <div class="row mb-4">
                <div class="col-sm-6">

                    <h6 class="mb-3">From:</h6>
                    <div>
                        <strong>Diagnostic Center</strong>
                    </div>
                    <div>Uttara,Dhaka</div>
                    <div>Email: diagnostic@gmail.com</div>
                    <div>Phone: +8801784438727</div>
                </div> --}}

                {{-- <div class="col-sm-6">

                        <h6 class="mb-3">To:</h6>
                        <div>
                            <strong>Patient ID:{{ auth()->user()->name }}</strong>
            </div>

            <div><strong>Doctor Name:{{ $appointmentData->doctors_name  }}</strong>
            </div>
            <div>Email:{{ auth()->user()->email }}</div>
            <div>Phone:{{ auth()->user()->contact_no }}</div>
        </div> --}}



        {{-- </div>

            <div class="table-responsive-sm">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th class="center">#</th>
                            <th>Test Id</th>
                            <th>Test Name</th>

                            <th class="right">Unit Cost</th>
                            <th class="center">Qty</th>
                            <th class="right">Total</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($appointmentData->tests as $data )
                        <tr>
                            <td class="center">1</td>
                            <td class="right">{{ $data->id }}</td>
        <td class="right">
            @isset($data->test_name)
            {{-- @foreach ($appointmentData->tests as $test)
                                    {{ $test->test_name }}

            @endforeach --}}
            {{-- {{ $data->test_name }}
            @endisset</td>
        <td class="right">
            @isset($data->test_price)
            {{ $data->test_price }}
            @endisset</td>

        <td class="right"> </td>
        </tr>
        @endforeach




        </tbody>
        </table>
    </div>
    <div class="row">
        <div class="col-lg-4 col-sm-5">

        </div>

        <div class="col-lg-4 col-sm-5 ml-auto">
            <table class="table table-clear">
                <tbody>
                    <tr>
                        <td class="left">
                            <strong>Total Pay</strong>
                        </td>
                        <td class="right">{{ $appointmentData->mount }}</td>
                    </tr>

                    <tr>
                        <td class="left">
                            <strong>VAT (0.00%)</strong>
                        </td>
                        <td class="right">0.00</td>
                    </tr>
                    <tr>
                        <td class="left">
                    <tr>
                        <td class="left">
                            <strong>Total Due Amount</strong>

                        </td>
                        <td class="right">{{ $appointmentData->due_amount }}</td>
                    </tr>
                    </tr>
                </tbody>
            </table>

        </div>

    </div>
</div> --}}
