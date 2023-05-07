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
                            <h3 style="color:red;"> ALL Admin</h2>
                            <thead>
                                <tr class="text-white">
                                    
                                    <th scope="col">Id</th>
                                    <th scope="col">Name</th>
                                    <th scope="col">Email-Address</th>
									<th scope="col">Enrollment-Number</th>
									<th scope="col">Div</th>
									<th scope="col">Role</th>
                                    <th scope="col">Password</th>
                                    
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($in as $data)
                                <tr>
                                    <td>{{$data->id}}</td>
                                    <td>{{$data->name}}</td>
									<td>{{$data->email}}</td>
									<td>{{$data->enumber}}</td>
									<td>{{$data->div}}</td>
									<td>{{$data->role}}</td>
                                    <td>{{$data->password}}</td>
                                    
                                </tr>
                                 @endforeach
                                
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <!-- Recent Sales End -->
        </div>
        <!-- Content End -->


        <!-- Back to Top -->
       
    </div>

    <!-- @includeIf('admin.end')    -->

 <!-- Teh Fifth File Of Admin Panel --> -->


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
