<?php
require ("essentials.php");
adminLogin();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel - Settings</title>
    <?php require ('links.php'); ?>
</head>

<body class="bg-light">
 
    <?php require('header.php') ?>
    <div class="container-fluid" id="main-content">
        <div class="row">
            <div class="col-lg-10 ms-auto p-4 overflow-hidden">
                <h3 class="mb-4">SETTINGS</h3>


                  <!-- GENERAL SETTINGS SECTION -->

                <div class="card border-0 shadow-sm mb-4">
                <div class="card-body">
                    <div class="d-flex align-items-center justify-content-between mb-3">
                        <h5 class="card-title m-0">General Settings</h5>
                        <button type="button" class="btn btn-dark shadow-none btn-sm" data-bs-toggle="modal" data-bs-target="#general-s">
                        <i class="bi bi-pencil-square"></i> <span> </span> Edit
                        </button>
                    </div>
                    <h6 class="card-subtitle mb-1 fw-bold">Site Title</h6>
                    <p class="card-text" id="site_title"></p>
                    <h6 class="card-subtitle mb-1 fw-bold">About Us</h6>
                    <p class="card-text" id="site_about"></p>
                </div>
                </div>

                   <!-- GENERAL SETTINGS MODAL -->

                <div class="modal fade" id="general-s" data-bs-backdrop="static" data-bs-keyboard="true" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog">
                <form id="general_s_form">
            <div class="modal-content">
                 <div class="modal-header">
                        <h5 class="modal-title">General Settings</h5>
                </div>
                <div class="modal-body">
                       <div class="mb-3">
                        <label class="form-label fw-bold">Site Title</label>
                        <input
                            id="site_title_inp"
                            type="text" name="site_title"
                            class="form-control shadow-none"
                            required
                        />
                        </div>
                        <div class="mb-3">
                        <label class="form-label fw-bold">About Us</label>
                        <textarea
                            id="site_about_inp"
                            name="site_about"
                            class="form-control shadow-none"
                            rows="6"
                            required
                        ></textarea>
                        </div>
                </div>
                    <div class="modal-footer">
                        <button type="button"
                        onclick="site_title.value = general_data.site_title, site_about.value = general_data.site_about"
                        class="btn text-secondary shadow-none" data-bs-dismiss="modal">Cancel</button>
                        <button type="submit"
                        class="btn custom-bg text-white shadow-none">Save</button>
                    </div>
                    </div>
                </form>
            </div>
            </div>


                  <!-- SHUTDOWN SECTION  -->

            <div class="card border-0 shadow-sm mb-4">
                <div class="card-body">
                    <div class="d-flex align-items-center justify-content-between mb-3">
                        <h5 class="card-title m-0">Shutdown Website</h5>
                        <div class="form-check form-switch">
                            <form>
                                <input 
                                onchange="upd_shutdown(this.value)"
                                class="form-check-input" id="shutdown_toggle" type="checkbox">
                            </form>
                        </div>
                    </div>
                    <p class="card-text">
                        No customers will be allowed to book hotel rooms, when shutdown mode is turned on.
                    </p>
                </div>
                </div>


                  <!-- CONTACT DETAILS SECTION -->
                  <div class="card border-0 shadow-sm mb-4">
                <div class="card-body">
                    <div class="d-flex align-items-center justify-content-between mb-3">
                        <h5 class="card-title m-0">Contacts Settings</h5>
                        <button type="button" class="btn btn-dark shadow-none btn-sm" data-bs-toggle="modal" data-bs-target="#contacts-s">
                        <i class="bi bi-pencil-square"></i> <span> </span> Edit
                        </button>
                    </div>
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="mb-4">
                                <h6 class="card-subtitle mb-1 fw-bold">Address</h6>
                                <p class="card-text" id="address"></p>
                            </div>
                            <div class="mb-4">
                                <h6 class="card-subtitle mb-1 fw-bold">Google Map</h6>
                                <p class="card-text" id="gmap"></p>
                            </div>
                            <div class="mb-4">
                                <h6 class="card-subtitle mb-1 fw-bold">Phone Numbers</h6>
                                <p class="card-text mb-1">
                                    <i class="bi bi-telephone-fill"></i>
                                <span id="pn1"></span>
                            </p>
                                <p class="card-text">
                                    <i class="bi bi-telephone-fill"></i>
                                <span id="pn2"></span>
                            </p>
                            </div>
                            <div class="mb-4">
                                <h6 class="card-subtitle mb-1 fw-bold">E-Mail</h6>
                                <p class="card-text" id="email"></p>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="mb-4">
                                <h6 class="card-subtitle mb-1 fw-bold">Social Links</h6>
                            <p class="card-text mb-1">
                                <i class="bi bi-facebook me-1"></i>
                                <span id="fb"></span>
                            </p>
                            <p class="card-text mb-1">
                                <i class="bi bi-instagram me-1"></i>
                                <span id="insta"></span>
                            </p>
                            <p class="card-text">
                            <i class="bi bi-twitter me-1"></i>
                                <span id="tw"></span>
                            </p>
                        </div>
                            <div class="mb-4">
                                <h6 class="card-subtitle mb-1 fw-bold">iFrame</h6>
                            <iframe id="iframe" class="border p-2 w-100" loading="lazy"></iframe>
                            </div>
                        </div>
                    </div>
                </div>
                </div>


                  <!-- CONTACT DETAILS MODAL -->

        <div class="modal fade" id="contacts-s" data-bs-backdrop="static" data-bs-keyboard="true" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <form id="contacts_s_form">
                    <div class="modal-content">
                        <div class="modal-header">
                                <h5 class="modal-title">Contacts Settings</h5>
                        </div>
                        <div class="modal-body">
                            <div class="container-fluid p-0">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                        <label class="form-label fw-bold">Address</label>
                                        <input
                                            id="address_inp"
                                            type="text" name="address"
                                            class="form-control shadow-none"
                                            required
                                        />
                                        </div>
                                        <div class="mb-3">
                                        <label class="form-label fw-bold">Google Map Link</label>
                                        <input
                                            id="gmap_inp"
                                            type="text" name="gmap"
                                            class="form-control shadow-none"
                                            required
                                        />
                                        </div>
                                        <div class="mb-3">
                                        <label class="form-label fw-bold">Phone Numbers (with country code)</label>
                                        <div class="input-group mb-3">
                                            <span class="input-group-text">
                                            <i class="bi bi-telephone-fill"></i>
                                            </span>
                                            <input type="number" 
                                            name="pn1"
                                            id="pn1_inp"
                                            class="form-control shadow-none"
                                            required>
                                            </div>
                                        <div class="input-group mb-3">
                                            <span class="input-group-text"><i class="bi bi-telephone-fill"></i></span>
                                            <input type="number" 
                                            name="pn2"
                                            id="pn2_inp"
                                            class="form-control shadow-none"
                                            >
                                            </div>
                                        </div>
                                        <div class="mb-3">
                                        <label class="form-label fw-bold">Email</label>
                                        <input
                                            id="email_inp"
                                            type="email" name="email"
                                            class="form-control shadow-none"
                                            required
                                        />
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                    <div class="mb-3">
                                        <label class="form-label fw-bold">Social Links</label>
                                        <div class="input-group mb-3">
                                            <span class="input-group-text">
                                            <i class="bi bi-facebook"></i>
                                            </span>
                                            <input type="text" 
                                            name="fb"
                                            id="fb_inp"
                                            class="form-control shadow-none"
                                            required>
                                        </div>
                                        <div class="input-group mb-3">
                                            <span class="input-group-text"><i class="bi bi-instagram"></i></span>
                                            <input type="text" 
                                            name="insta"
                                            id="insta_inp"
                                            class="form-control shadow-none"
                                            required
                                            >
                                        </div>
                                        <div class="input-group mb-3">
                                            <span class="input-group-text"><i class="bi bi-twitter"></i></span>
                                            <input type="text" 
                                            name="tw"
                                            id="tw_inp"
                                            class="form-control shadow-none"
                                            >
                                        </div>
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label fw-bold">iFrame Src</label>
                                        <input
                                            id="iframe_inp"
                                            type="text" name="iframe"
                                            class="form-control shadow-none"
                                            required
                                        />
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                            <div class="modal-footer">
                                <button type="button"
                                onclick="contacts_inp(contacts_data)"
                                class="btn text-secondary shadow-none" data-bs-dismiss="modal">Cancel</button>
                                <button type="submit"
                                class="btn custom-bg text-white shadow-none">Save</button>
                            </div>
                    </div>
                </form>
            </div>
        </div>


            <!-- MANAGEMENT TEAM SECTION -->

            <div class="card border-0 shadow-sm mb-4">
                <div class="card-body">
                    <div class="d-flex align-items-center justify-content-between mb-3">
                        <h5 class="card-title m-0">Management Team</h5>
                        <button type="button" class="btn btn-dark shadow-none btn-sm" data-bs-toggle="modal" data-bs-target="#team-s">
                        <i class="bi bi-plus-square"></i> Add
                        </button>
                    </div>

                    <div class="row" id="team-data">
                       
                    </div>

                </div>
            </div>


                 <!-- MANAGEMENT TEAM MODAL -->

        <div class="modal fade" id="team-s" data-bs-backdrop="static" data-bs-keyboard="true" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog">
         <form id="team_s_form">
            <div class="modal-content">
                 <div class="modal-header">
                        <h5 class="modal-title">Add Team Member</h5>
                </div>
                <div class="modal-body">
                       <div class="mb-3">
                        <label class="form-label fw-bold">Name</label>
                        <input
                            id="member_name_inp"
                            type="text" name="member_name"
                            class="form-control shadow-none"
                            required
                        />
                        </div>
                        <div class="mb-3">
                        <label class="form-label fw-bold">Picture</label>
                        <input
                            id="member_picture_inp"
                            type="file" name="member_picture"
                            accept=".jpg, .png, .jpeg, .webp"
                            class="form-control shadow-none"
                            required
                        />
                        </div>
                </div>
                    <div class="modal-footer">
                        <button type="button"
                        onclick="member_name.value='', member_picture.value=''"
                        class="btn text-secondary shadow-none" data-bs-dismiss="modal">Cancel</button>
                        <button type="submit"
                        class="btn custom-bg text-white shadow-none">Save</button>
                    </div>
                    </div>
                </form>
            </div>
            </div>

            </div>
        </div>
    </div>

    <?php require ('scripts.php'); ?>
    <script>
        let general_data, contacts_data;

        let general_s_form = document.getElementById('general_s_form');
        let site_title_inp = document.getElementById('site_title_inp');
        let site_about_inp = document.getElementById('site_about_inp');

        let contacts_s_form = document.getElementById('contacts_s_form');

        let team_s_form = document.getElementById('team_s_form');
        let member_name_inp = document.getElementById('member_name_inp');
        let member_picture_inp =document.getElementById('member_picture_inp');

        
        function get_general(){
            let site_title = document.getElementById('site_title');
            let site_about = document.getElementById('site_about');


            let shutdown_toggle = document.getElementById('shutdown_toggle');

            let xhr = new XMLHttpRequest();
            xhr.open("POST","ajax/settings_crud.php",true);
            xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');

            xhr.onload = function () {
                general_data = JSON.parse(this.responseText);

                site_title.innerText = general_data.site_title;
                site_about.innerText = general_data.site_about;

                site_title_inp.value = general_data.site_title;
                site_about_inp.value = general_data.site_about;

                if(general_data.shutdown == 0){
                    shutdown_toggle.checked = false;
                    shutdown_toggle.value = 0;
                }
                else{
                    shutdown_toggle.checked = true;
                    shutdown_toggle.value = 1;
                }
            }

            xhr.send('get_general');
        }

        general_s_form.addEventListener('submit',function(e){
            e.preventDefault();
            upd_general(site_title_inp.value,site_about_inp.value);
        })


        function upd_general(site_title_val,site_about_val){
            let xhr = new XMLHttpRequest();
            xhr.open("POST","ajax/settings_crud.php",true);
            xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');

            xhr.onload = function () {

                var myModal = document.getElementById('general-s');
                var modal = bootstrap.Modal.getInstance(myModal);
                modal.hide();

                if(this.responseText==1){
                    alert('success','Changes Saved!');
                    get_general();
                }
                else{
                    alert('error','No Changes made.');
                }
                
            }

            xhr.send('site_title='+site_title_val+'&site_about='+site_about_val+'&upd_general');
        }

        function upd_shutdown(val){
            let xhr = new XMLHttpRequest();
            xhr.open("POST","ajax/settings_crud.php",true);
            xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');

            xhr.onload = function () {

                if(this.responseText==1 && general_data.shutdown==0){
                    alert('success','Site has been shutdown!');
                }
                else{
                    alert('success','Shutdown mode off.');
                }
                get_general();
            }

            xhr.send('upd_shutdown='+val);
        }

        function get_contacts(){
            let contact_p_id = ['address','gmap','pn1','pn2','email','fb','insta','tw'];
            let iframe = document.getElementById('iframe');

            let xhr = new XMLHttpRequest();
            xhr.open("POST","ajax/settings_crud.php",true);
            xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');

            xhr.onload = function () {
                contacts_data = JSON.parse(this.responseText);
                contacts_data = Object.values(contacts_data);

                for(i=0;i<contact_p_id.length;i++){
                    document.getElementById(contact_p_id[i]).innerText = contacts_data[i+1];
                }
               iframe.src =  contacts_data[9];
               contacts_inp(contacts_data);
            }

            xhr.send('get_contacts');
        }

        function contacts_inp(data){
            let contacts_inp_id = ['address_inp','gmap_inp','pn1_inp','pn2_inp','email_inp','fb_inp','insta_inp','tw_inp','iframe_inp'];

            for(i=0;i<contacts_inp_id.length;i++){
                document.getElementById(contacts_inp_id[i]).value = data[i+1];
            }
        }

        contacts_s_form.addEventListener('submit',function(e){
            e.preventDefault();
            upd_contacts();
        })
        

        function upd_contacts(){
            let index = ['address','gmap','pn1','pn2','email','fb','insta','tw','iframe'];
            let contacts_inp_id = ['address_inp','gmap_inp','pn1_inp','pn2_inp','email_inp','fb_inp','insta_inp','tw_inp','iframe_inp']; 

            let data_str="";

            for(i=0;i<index.length;i++){
                data_str += index[i] + "=" + document.getElementById(contacts_inp_id[i]).value + '&';
            }
            data_str += "upd_contacts";

            let xhr = new XMLHttpRequest();
            xhr.open("POST","ajax/settings_crud.php",true);
            xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');

            xhr.onload = function(){

                var myModal = document.getElementById('contacts-s');
                var modal = bootstrap.Modal.getInstance(myModal);
                modal.hide();

                if(this.responseText==1){
                    alert('success','Changes Saved!');
                    get_contacts();
                }
                else{
                    alert('error','No Changes made.');
                }
            }

            xhr.send(data_str);
        }

        team_s_form.addEventListener('submit',function(e){
            e.preventDefault();
            add_member();
        });

        function add_member(){
            let data = new FormData(); //formdata creates object , used to carry file data in ajax (already have set requestheader so no need to add separately like before)
            data.append('name',member_name_inp.value);
            data.append('picture',member_picture_inp.files[0]); //files[0] to take one file input only (first one selected)
            data.append('add_member','');

            let xhr = new XMLHttpRequest();
            xhr.open("POST","ajax/settings_crud.php",true);
            

            xhr.onload = function () {

                var myModal = document.getElementById('team-s');
                var modal = bootstrap.Modal.getInstance(myModal);
                modal.hide();

                if(this.responseText == 'inv_img'){
                    alert('error','Only Jpg and Png images allowed!');
                }
                else if(this.responseText == 'inv_size'){
                    alert('error','Image size should be less than 2 mb.');
                }
                else if(this.responseText == 'upd_failed'){
                    alert('error','Image upload failed. Server down.');
                }
                else{
                    alert('success','New member added.');
                    member_name_inp.value='';
                    member_picture_inp.value='';
                    get_members();
                }
                
            }

            xhr.send(data);

        }

        function get_members(){
            let xhr = new XMLHttpRequest();
            xhr.open("POST","ajax/settings_crud.php",true);
            xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');

            xhr.onload = function () {
               document.getElementById('team-data').innerHTML = this.responseText;
            }

            xhr.send('get_members');
        }

        function rem_member(val){
            let xhr = new XMLHttpRequest();
            xhr.open("POST","ajax/settings_crud.php",true);
            xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');

            xhr.onload = function () {
                if(this.responseText==1){
                    alert('success','Member removed!');
                    get_members();
                }
                else{
                    alert('error','Server down.');
                }
            }

            xhr.send('rem_member='+val);

        }

        window.onload = function (){
            get_general();
            get_contacts();
            get_members();
        }

    </script>

</body>

</html>