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
                        <img class="img-fluid  mx-auto" src="feedback/images/pj.png" style="width: 150px; height: 150px;">
                        <h3 style="color:red;">Priyanka Joshi</h3>
                            <thead>
                                <tr class="text-white">
                                    <th scope="col">Email-ID</th>
                                    <th scope="col">Q1.How well did Priyanka Ma'am prepare for each class and deliver the course material?How well did Priyanka Ma'am prepare for each class and deliver the course material?</th>
								    <th scope="col">Q2.How effectively did Priyanka Ma'am use visual aids and resources to teach Ubuntu and Laravel concepts?How effectively did Priyanka Ma'am use visual aids and resources to teach Ubuntu and Laravel concepts?</th>
								    <th scope="col">Q3.How helpful were the online resources and materials provided by Priyanka Ma'am, such as slides, videos, and code samples?</th>
								    <th scope="col">Q4.How well did Priyanka Ma'am explain Ubuntu and Laravel syntax and concepts?</th>
                                    <th scope="col">Q5.How effective was Priyanka Ma'am in providing feedback and constructive criticism on student work?</th>

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
