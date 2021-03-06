@extends('layouts.master')

@section('page_title', 'Subject Category')

@section('body_content')

<div class="row btn-thing">
    <h4>Subject Category</h4>
    <span class="divider"></span>
    <div class="divider"></div><br/>
    <div class="row">
        <div id="admin" class="col s12">
            <div class="card material-table" >
                <div class="table-header blue-grey lighten-5">
                    Add Subject Category
                </div>

                <div class="div_notif notif"></div>

                <form id="form_add_subject_category" accept-charset="utf-8" class="row" style="padding: 10px">
                    <div class="input-field col s12 m9">
                        <input id="subject_category" type="text" name="description" class="validate" required="" aria-required="true">
                        <label for="subject_category">Subject Category</label>
                    </div>
                    <div class="input-field col s12 m3">
                        <button id="btn-add-subject-category" class="btn waves-effect btn-large btn-block waves-light">Add <i class="material-icons right">add</i></button>
                    </div>
                </form>
            </div>
            <div class="card material-table">
                <div class="table-header blue-grey lighten-5">List of Subject Category
                    <div class="actions">
                        <a href="#" class="search-toggle waves-effect btn-flat nopadding"><i class="material-icons">search</i></a>
                    </div>
                </div>
                <div class="ddiv_notif notif"></div>
                <table class="responsive-table" id="subject-categories"></table>
            </div>
        </div>
    </div>
</div>
<div id="edit-subject-category" class="modal edit-subject-category">
    <div class="modal-content">
        <h5>Edit Subject Category</h5>
        <div class="div_notif notif"></div>
        <form id="form_edit_subject_category" accept-charset="utf-8" class="row form_edit_subject_category">
            <div class="input-field col s12 m12">
                <input id="esubject_category" type="text" name="description" class="validate" required="" aria-required="true">
                <input id="esubject_category_id" type="hidden" name="subject_category_id" class="validate" required="" aria-required="true">
                <label for="subject_category">Description</label>
            </div>
            <div class="pull-right">
                <a href="#!" class="modal-action modal-close waves-effect waves-red btn-flat freakin-modal">Close</a>
                <button class="modal-action btn waves-effect waves-light btn-update-subject-category">Save</button>
            </div>
        </form>
    </div>
</div>

<div id="delete-subject-category" class="modal">
    <div class="modal-content">
        <h5>Delete Subject Category</h5>
        Do you want to delete this subject category?
    </div>
    <div class="modal-footer">
        <a href="#!" class="modal-action modal-close btn waves-effect waves-light btn-delete-yes-subject-category">Yes</a>
        <a href="#!" class="modal-action modal-close waves-effect waves-red btn-flat">No</a>
    </div>
</div>

@stop

@section('custom-scripts')
<link href="{{asset('dataTable/jquery.dataTables_.css')}}" rel="stylesheet">
<script src="{{ asset('dataTable/jquery.dataTables.min.js')}}"></script>
<script src="{{ asset('dataTable/jquery.dataTables_.min.js')}}"></script>
<script src="{{ asset('teachatv3/school-admin/subject-category.js')}}"></script>
@stop
