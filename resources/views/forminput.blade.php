@extends('layouts.cms')
@section('content')
<div class="m-grid__item m-grid__item--fluid m-wrapper">

    <!-- BEGIN: Subheader -->
    <div class="m-subheader ">
        <div class="d-flex align-items-center">
            <div class="mr-auto">
                <h3 class="m-subheader__title m-subheader__title--separator">Halaman</h3>
                <ul class="m-subheader__breadcrumbs m-nav m-nav--inline">
                    <li class="m-nav__item m-nav__item--home">
                        <a href="#" class="m-nav__link m-nav__link--icon">
                            <i class="m-nav__link-icon la la-home"></i>
                        </a>
                    </li>
                    <li class="m-nav__separator">-</li>
                    <li class="m-nav__item">
                        <a href="" class="m-nav__link">
                            <span class="m-nav__link-text">Input Data</span>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>

    <!-- END: Subheader -->
    <div class="m-content">

        <!-- Begin::Section -->
        <div class="row">
            <div class="col-xl-12">
                <form class="m-form m-form--state m-form--label-align-left">
                    <div class="m-portlet">
                        <div class="m-portlet__head">
                            <div class="m-portlet__head-caption">
                                <div class="m-portlet__head-title">
                                    <span class="m-portlet__head-icon">
                                        <i class="la la-keyboard-o"></i>
                                    </span>
                                    <h3 class="m-portlet__head-text">
                                        Input Data
                                    </h3>
                                </div>
                            </div>
                        </div>

                        <div class="m-portlet__body">
                            <div class="tab-content">
                                <div class="tab-pane active" id="indonesia_content">
                                    <div class="row">
                                        <div class="col-xl-10 offset-xl-1">
                                            <div class="m-form__section m--margin-0">
                                                <div class="m-form__heading">
                                                    <h3 class="m-form__heading-title">Input Data Alumni</h3>
                                                </div>
                                                <!-- Body Input -->
                                                <!-- Nisn -->
                                                <div class="form-group m-form__group row">
                                                    <label class="form-control-label col-lg-3">Nisn</label>
                                                    <div class="col-lg-9">
                                                        <input type="text" class="form-control m-input" placeholder="">
                                                        <span class="m-form__help">Silahkan Masukkan Nisn Anda</span>
                                                    </div>
                                                    <label class="form-control-label col-lg-3">Nis</label>
                                                    <div class="col-lg-9">
                                                        <input type="text" class="form-control m-input" placeholder="">
                                                        <span class="m-form__help">Silahkan Masukkan Nis Anda</span>
                                                    </div>

                                                    <!-- Nama -->
                                                    <label class="form-control-label col-lg-3 mt-4">Nama</label>
                                                    <div class="col-lg-9 mt-4">
                                                        <input type="text" class="form-control m-input" placeholder="">
                                                    </div>
                                                    <!-- Jurusan -->
                                                    <label class="form-control-label col-lg-3 mt-4">Jurusan</label>
                                            <div class="col-lg-9 mt-4">
                                                <div class="m-form__control">
                                                    <select class="form-control m-bootstrap-select m_selectpicker">
                                                        <option>----Pilih Jurusan-----</option>
                                                        <option>RPL</option>
                                                        <option>MMD</option>
                                                        <option>TBG</option>
                                                        <option>HTL</option>
                                                    </select>
                                                </div>
                                            </div>
                                                    <!-- Rayon -->
                                                    <label class="form-control-label col-lg-3 mt-4">Rayon</label>
                                            <div class="col-lg-9 mt-4">
                                                <div class="m-form__control">
                                                    <select class="form-control m-bootstrap-select m_selectpicker">
                                                        <option>----Pilih Rayon-----</option>
                                                        <option>Cicurug</option>
                                                        <option>Cibedug</option>
                                                        <option>Cibinong</option>
                                                        <option>Cisarua</option>
                                                    </select>
                                                </div>
                                            </div>

                                                <!-- JK -->

                                                    <label class="form-control-label col-lg-3 mt-4">Jenis Kelamin</label>
                                                    <div class="col-lg-9 mt-4">
                                                        <div class="m-radio-inline">
                                                            <label class="m-radio m-radio--solid m-radio--primary">
                                                                <input type="radio" name="status" value="1" checked>Laki-Laki
                                                                <span></span>
                                                            </label>
                                                            <label class="m-radio m-radio--solid m-radio--primary">
                                                                <input type="radio" name="status" value="2"> Perempuan
                                                                <span></span>
                                                            </label>
                                                        </div>
                                                    </div>

                                                <!-- Tgl Masuk -->
                                            <label class="form-control-label col-lg-3 mt-4">Tahun Masuk</label>
                                            <div class="col-lg-9 mt-4">
                                                <div class="input-group m-input-group">
                                                    <input type="number" class="form-control" id="" placeholder="Masukkan Tahun Masuk" />
                                                </div>
                                            </div>
                                                <!-- Tgl Keluar -->
                                                <label class="form-control-label col-lg-3 mt-4">Tahun Lulus</label>
                                                <div class="col-lg-9 mt-4">
                                                    <div class="input-group m-input-group">
                                                        <input type="number" class="form-control" id="" placeholder="Masukkan Tahun Lulus" />
                                                    </div>
                                                </div>
                                            <!-- Alamat -->

                                                    <label class="form-control-label col-lg-3 mt-4">Alamat</label>
                                                    <div class="col-lg-9 mt-4">
                                                        <input type="text" class="form-control m-input" placeholder="">
                                                    </div>
                                                    <!-- Email -->

                                                    <label class="form-control-label col-lg-3 mt-4">Email</label>
                                                    <div class="col-lg-9 mt-4">
                                                        <input type="email" class="form-control m-input" placeholder="">
                                                    </div>

                                                    <!-- Nao telp -->
                                                    <label class="form-control-label col-lg-3 mt-4">Nomor Telepon</label>
                                                    <div class="col-lg-9 mt-4">
                                                        <input type="number" class="form-control m-input" placeholder="">
                                                    </div>

                                                    <!-- stat -->
                                                    <label class="form-control-label col-lg-3 mt-4">Status</label>
                                            <div class="col-lg-9 mt-4">
                                                <div class="m-form__control">
                                                    <select class="form-control m-bootstrap-select m_selectpicker">
                                                        <option>----Pilih Status-----</option>
                                                        <option>----</option>
                                                        <option>----</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                                <!-- title
                                                <div class="form-group m-form__group row">
                                                    <label class="form-control-label col-lg-3">Summary</label>
                                                    <div class="col-lg-9">
                                                        <div class="summernote" id="m_summernote_1"></div>
                                                    </div>
                                                </div> -->
                                                <!-- Full Content-->
                                                <!-- <div class="form-group m-form__group row">
                                                    <label class="form-control-label col-lg-3">Full Content</label>
                                                    <div class="col-lg-9">
                                                        <div class="summernote" id="m_summernote_1"></div>
                                                    </div>
                                                </div> -->
                                                <!--Full Content-->
                                                <!-- <div class="form-group m-form__group row">
                                                    <label class="form-control-label col-lg-3">Tag</label>
                                                    <div class="col-lg-9">
                                                        <input type="text" class="form-control m-input" placeholder="Tags">
                                                        <span class="m-form__help">separate tags with commas','</span>
                                                    </div>
                                                </div> -->
                                                <!-- title -->
                                                <div class="m-form__group form-group row">
                                                    <label class="form-control-label col-lg-3">Lainnya</label>
                                                    <div class="col-lg-9">
                                                        <span class="m-switch m-switch--outline m-switch--icon m-switch--primary">
                                                            <label>
                                                                <input type="checkbox" name="" data-toggle="collapse" data-target="#advance-settings-id">
                                                                <span></span>
                                                            </label>
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="m-form__section collapse" id="advance-settings-id" aria-expanded="false">
                                                <div class="m-form__heading">
                                                    <h3 class="m-form__heading-title">Lainnya</h3>
                                                </div>
                                                <div class="form-group m-form__group row">
                                                        <!-- stat -->
                                                        <label class="form-control-label col-lg-3 mt-4">Status</label>
                                                        <div class="col-lg-9 mt-4">
                                                            <div class="m-form__control">
                                                                <select class="form-control m-bootstrap-select m_selectpicker">
                                                                    <option>----Pilih Status-----</option>
                                                                    <option>----</option>
                                                                    <option>----</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                </div>
                                                <!-- Jenis -->
                                                <div class="form-group m-form__group row">
                                                        <label class="form-control-label col-lg-3 mt-4">Jenis</label>
                                                        <div class="col-lg-9 mt-4">
                                                            <input type="text" class="form-control m-input" placeholder="">
                                                        </div>
                                                        <!-- Lokasi -->
                                                        <label class="form-control-label col-lg-3 mt-4">Lokasi</label>
                                                        <div class="col-lg-9 mt-4">
                                                            <input type="text" class="form-control m-input" placeholder="">
                                                        </div>
                                                    </div>
                                                </div>


                                </div>
                                <div class="tab-pane" id="english_content">


                                            <div class="m-form__section collapse" id="advance-settings-eng" aria-expanded="false">

                                                <!--Meta Title-->
                                                <div class="form-group m-form__group row">
                                                    <label class="form-control-label col-lg-3">Text Area Auto Size</label>
                                                    <div class="col-lg-9">
                                                        <textarea class="form-control" id="m_autosize_1" rows="3"></textarea>
                                                    </div>
                                                </div><!--Meta Description-->
                                                <div class="form-group m-form__group row">
                                                    <label class="form-control-label col-lg-3">Meta Keyword</label>
                                                    <div class="col-lg-9">
                                                        <input type="text" class="form-control m-input" placeholder="Title Post">
                                                        <span class="m-form__help">separate tags with commas','</span>
                                                    </div>
                                                </div><!--Meta Keyword-->
                                                <div class="m-form__seperator m-form__seperator--dashed m-form__seperator--space"></div>
                                                <div class="m-form__heading">
                                                    <h3 class="m-form__heading-title">Schedule Setting</h3>
                                                </div>
                                                <div class="form-group m-form__group row">
                                                    <label class="form-control-label col-lg-3">Date Range</label>
                                                    <div class="col-lg-9">
                                                        <div class="input-daterange input-group" id="m_datepicker_5">
                                                            <input type="text" class="form-control m-input" name="start">
                                                            <div class="input-group-append">
                                                                <span class="input-group-text"><i class="la la-ellipsis-h"></i></span>
                                                            </div>
                                                            <input type="text" class="form-control" name="end">
                                                        </div>
                                                    </div>
                                                </div><!--Date Range-->
                                                <div class="form-group m-form__group row">
                                                    <label class="form-control-label col-lg-3">Action After</label>
                                                    <div class="col-lg-9">
                                                        <div class="m-radio-inline">
                                                            <label class="m-radio m-radio--solid m-radio--primary">
                                                                <input type="radio" name="action-after" value="1" checked> Draft
                                                                <span></span>
                                                            </label>
                                                            <label class="m-radio m-radio--solid m-radio--primary">
                                                                <input type="radio" name="action-after" value="2"> Unpublish
                                                                <span></span>
                                                            </label>
                                                            <label class="m-radio m-radio--solid m-radio--primary">
                                                                <input type="radio" name="action-after" value="3"> Delete
                                                                <span></span>
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div><!--Check Radio-->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>


                        </div>
                        <div class="m-portlet__foot m-portlet__foot--fit">
                            <div class="m-form__actions m-form__actions--solid">
                                <div class="row">
                                    <div class="col-xl-10 offset-xl-1">
                                        <div class="row">
                                            <div class="col-lg-3 col-sm-12"></div>
                                            <div class="col-lg-9">
                                                <div class="input-group file-input">
                                                    <button type="submit" class="btn btn-danger btn-sm m-btn--pill m-btn--air m-btn--wide">Submit</button>
                                                    <button type="reset" class="btn btn-secondary btn-sm m-btn--wide m-btn--pill m--margin-left-5">Cancel</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </form>
                <!--End::Portlet-->
            </div>
        </div>

        <!--End::Section-->

    </div>
</div>
</div>

<!-- end:: Body -->
@endsection
