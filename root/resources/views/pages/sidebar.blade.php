{{--<section class="col-md-3 navbar aside">--}}
    <ul class="nav side-menu">
        <li class="navbar-sky" title="Search for Recent Result">
            <a href="?page=search_result"><img src="{{ asset('root/resources/assets/images/results_icon.png') }}" alt=""/> Search Result</a>
        </li>
        <li class="navbar-sky">
            <a href="?page=search_students"><img src="{{ asset('root/resources/assets/images/students-list.png') }}" alt=""/> Search Student</a>
        </li>
        <li class="navbar-sky">
            <a href="?page=e-class"><img src="{{ asset('root/resources/assets/images/projector.png') }}" alt=""/> e-Class</a>
        </li>
        <li class="navbar-sky">
            <a href="?page=downloads"><img src="{{ asset('root/resources/assets/images/download.png') }}" alt=""/> Downloads</a>
        </li>
        <li class="navbar-sky">
            <a href="?page=gallery"><img src="{{ asset('root/resources/assets/images/gallery.png') }}" alt=""/> Gallery</a>
        </li>
        <li class="navbar-sky">
            <a href="?page=newspaper"><img src="{{ asset('root/resources/assets/images/newspaper.png') }}" alt=""/> Newspaper</a>
        </li>
        <li class="navbar-sky">
            <a href="?page=feedback"><img src="{{ asset('root/resources/assets/images/feedback.png') }}" alt=""/> Feedback</a>
        </li>
    </ul>
    <section class="news">
        <p class="text-center heading">Download</p>
        <ol>
            <li><a href="files/admissionForm.pdf" target="_blank">Admission Form</a></li>
            <li><a href="files/NameCorrection.pdf" target="_blank">Name Correction Form</a></li>
            <li><a href="files/DateOfBirthCorrection.pdf" target="_blank">Age Correction Form</a></li>
            <li><a href="#">Leave of Absence</a></li>
            <li><a href="#">Transfer Certificate</a></li>
        </ol>
        <a class="text-center" href="?page=downloads">see all download</a>
    </section>
    <section class="news">
        <p class="text-center heading">HIT COUNTER</p>
        <p><b>Total Hits: 5784</b></p>
        <p><b>Total Users: 1373</b></p>
        <?php //hit_counter() ?>
    </section>
{{--</section>--}}