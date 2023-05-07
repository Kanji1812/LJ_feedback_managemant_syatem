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
                        <img class="img-fluid  mx-auto" src="feedback/images/st.jpg" style="width: 150px; height: 150px;">
                        <h3 style="color:red;">Shailesh Thakkar</h3>
                            <thead>
                                <tr class="text-white">
                                    <th scope="col">Email-ID</th>
                                    <th scope="col">Q1.How would you rate the Communication skill faculty's ability to explain complex concepts in a simple manner?</th>
								    <th scope="col">Q2.How will did the Communication skill faculty engage with the students during the lectures?</th>
								    <th scope="col">Q3.How would you rate the Communication skill faculty's ability to respond to student questions and feedback?</th>
								    <th scope="col">Q4.How effective were the Communication skill faculty's use of teaching aids such as presentations and videos?</th>
                                    <th scope="col">Q5.How satisfied were you with the overall teaching and communication skills of the Communication skill faculty?</th>

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

    

 <!-- The First File Of Deedback-Admin Panel --> 


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
