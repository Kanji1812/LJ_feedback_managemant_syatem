@includeIf('admin.hade')
<body>
    @includeIf('admin.Sidebar')
    @includeIf('admin.navbar')

<!-- Recent Sales Start -->
            <div class="container-fluid pt-4 px-4">
                <div class="bg-secondary text-center rounded p-4">
                    <div class="d-flex align-items-center justify-content-between mb-4">
                        
                    </div>
                    <div class="table-responsive">
                        <table class="table text-start align-middle table-bordered table-hover mb-0">
                        <img class="img-fluid  mx-auto" src="feedback/images/logo.png" style="width: 150px; height: 150px;">
                        <h3 style="color:red;">LJ University Feedback Management System </h3>
                            <thead>
                                <tr class="text-white">
                                    <th scope="col">Email-ID</th>
                                    <th scope="col">Q1.How well do you feel the faculty member listened to and considered your feedback?</th>
								    <th scope="col">Q2.Did the faculty member respond to your feedback in any way?</th>
								    <th scope="col">Q3.Were there any changes in the course or teaching style that you noticed after providing feedback?</th>
								    <th scope="col">Q4.Would you feel comfortable providing feedback to this faculty member again in the future?</th>
                                    <th scope="col">Q5.Do you feel that the feedback management system adequately captures your thoughts and concerns about the faculty member's teaching?</th>

                                </tr>
                            </thead>
                            <tbody>
                                @foreach($data as $in)
                                <tr>
                                    <td>{{$in->email}}</td>
                                    <td>{{$in->fed1}}</td>
									<td>{{$in->fed2}}</td>
									<td>{{$in->fed3}}</td>
									<td>{{$in->fed4}}</td>
									<td>{{$in->fed5}}</td>
                                </tr>
                                 @endforeach
                                
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

    

 <!-- The Secong File Of Deedback-Admin Panel --> 


 <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="admin/lib/chart/chart.min.js"></script>
    <script src="admin/lib/easing/easing.min.js"></script>
    <script src="admin/lib/waypoints/waypoints.min.js"></script>
    <script src="admin/lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="admin/lib/tempusdominus/js/moment.min.js"></script>
    <script src="admin/lib/tempusdominus/js/moment-timezone.min.js"></script>
    <script src="admin/lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>

    <!-- Template Javascript -->
    <script src="admin/js/main.js"></script>
    
</body>

</html>
