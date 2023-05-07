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
                        <img class="img-fluid  mx-auto" src="feedback/images/mm.jpg" style="width: 150px; height: 150px;">
                        <h3 style="color:red;">Dr. Monica Gahlawat Dahiya</h3>
                            <thead>
                                <tr class="text-white">
                                    <th scope="col">Email-ID</th>
                                    <th scope="col">Q1.How well did Monika Ma'am explain database concepts and management techniques?</th>
								    <th scope="col">Q2.How effectively did Monika Ma'am provide guidance and support for projects and assignments?</th>
								    <th scope="col">Q3.How approachable and helpful was Monika Ma'am in answering student questions and addressing concerns?</th>
								    <th scope="col">Q4.How well did Monika Ma'am use real-world examples and scenarios to teach database concepts and applications?</th>
                                    <th scope="col">Q5.How satisfied were you with the overall teaching and guidance provided by Monika Ma'am in the Database-Management System course?</th>

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
