@extends('layouts.app')

@section('content')
<main class="page-content">
    <div class="row row-cols-1 row-cols-lg-2 row-cols-xl-2 row-cols-xxl-4">
        <div class="col">
          <div class="card overflow-hidden radius-10">
              <div class="card-body p-2">
               <div class="d-flex align-items-stretch justify-content-between radius-10 overflow-hidden">
                <div class="w-50 p-3 bg-light-pink">
                  <p>Total Orders</p>
                  <h4 class="text-pink">8,542</h4>
                </div>
                <div class="w-50 bg-pink p-3">
                   <p class="mb-3 text-white">+ 16% <i class="bi bi-arrow-up"></i></p>
                   <div id="chart1"></div>
                </div>
              </div>
            </div>
          </div>
         </div>
         <div class="col">
          <div class="card overflow-hidden radius-10">
              <div class="card-body p-2">
               <div class="d-flex align-items-stretch justify-content-between radius-10 overflow-hidden">
                <div class="w-50 p-3 bg-light-purple">
                  <p>Total Views</p>
                  <h4 class="text-purple">12.5M</h4>
                </div>
                <div class="w-50 bg-purple p-3">
                   <p class="mb-3 text-white">- 3.4% <i class="bi bi-arrow-down"></i></p>
                   <div id="chart2"></div>
                </div>
              </div>
            </div>
          </div>
         </div>
         <div class="col">
          <div class="card overflow-hidden radius-10">
              <div class="card-body p-2">
               <div class="d-flex align-items-stretch justify-content-between radius-10 overflow-hidden">
                <div class="w-50 p-3 bg-light-success">
                  <p>Revenue</p>
                  <h4 class="text-success">$64.5K</h4>
                </div>
                <div class="w-50 bg-success p-3">
                   <p class="mb-3 text-white">+ 24% <i class="bi bi-arrow-up"></i></p>
                   <div id="chart3"></div>
                </div>
              </div>
            </div>
          </div>
         </div>
         <div class="col">
          <div class="card overflow-hidden radius-10">
              <div class="card-body p-2">
               <div class="d-flex align-items-stretch justify-content-between radius-10 overflow-hidden">
                <div class="w-50 p-3 bg-light-orange">
                  <p>Customers</p>
                  <h4 class="text-orange">25.8K</h4>
                </div>
                <div class="w-50 bg-orange p-3">
                   <p class="mb-3 text-white">+ 8.2% <i class="bi bi-arrow-up"></i></p>
                   <div id="chart4"></div>
                </div>
              </div>
            </div>
          </div>
         </div>
      </div>
    
      

    
      <div class="card-header bg-transparent">
        <div class="row g-3 align-items-center">
          <div class="col">
            <h5 class="mb-0">Pending Orders</h5>
          </div>
          <div class="col">
            <div class="d-flex align-items-center justify-content-end gap-3 cursor-pointer">
              <div class="dropdown">
                <a class="dropdown-toggle dropdown-toggle-nocaret" href="#" data-bs-toggle="dropdown" aria-expanded="false"><i class="bx bx-dots-horizontal-rounded font-22 text-option"></i>
                </a>

              </div>
            </div>
          </div>
         </div>
      </div>
    
      <div class="card">
      <div class="card-body">
        <div class="table-responsive">
          <table class="table align-middle mb-0">
            <thead class="table-light">
              <tr>
                <th>#ID</th>
                <th>User</th>
                <th>Quantity</th>
                <th>Price</th>
                <th>Date</th>
                <th>Actions</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>#89742</td>
                <td>
                  <div class="d-flex align-items-center gap-3">
                    <div class="product-box border">
                       <img src="https://via.placeholder.com/400X300" alt="">
                    </div>
                    <div class="product-info">
                      <h6 class="product-name mb-1">zubair</h6>
                    </div>
                  </div>
                </td>
                <td>2</td>
                <td>$214</td>
                <td>Apr 8, 2021</td>
                <td>
                  <div class="d-flex align-items-center gap-3 fs-6">
                    <a href="javascript:;" class="text-primary" data-bs-toggle="tooltip" data-bs-placement="bottom" title="" data-bs-original-title="View detail" aria-label="Views"><i class="bi bi-eye-fill"></i></a>
                    <a href="javascript:;" class="text-warning" data-bs-toggle="tooltip" data-bs-placement="bottom" title="" data-bs-original-title="Edit info" aria-label="Edit"><i class="bi bi-pencil-fill"></i></a>
                    <a href="javascript:;" class="text-danger" data-bs-toggle="tooltip" data-bs-placement="bottom" title="" data-bs-original-title="Delete" aria-label="Delete"><i class="bi bi-trash-fill"></i></a>
                  </div>
                </td>
              </tr>
              <tr>
                <td>#68570</td>
                <td>
                  <div class="d-flex align-items-center gap-3">
                    <div class="product-box border">
                       <img src="https://via.placeholder.com/400X300" alt="">
                    </div>
                    <div class="product-info">
                      <h6 class="product-name mb-1">zanid</h6>
                    </div>
                  </div>
                </td>
                <td>1</td>
                <td>$185</td>
                <td>Apr 9, 2021</td>
                <td>
                  <div class="d-flex align-items-center gap-3 fs-6">
                    <a href="javascript:;" class="text-primary" data-bs-toggle="tooltip" data-bs-placement="bottom" title="" data-bs-original-title="View detail" aria-label="Views"><i class="bi bi-eye-fill"></i></a>
                    <a href="javascript:;" class="text-warning" data-bs-toggle="tooltip" data-bs-placement="bottom" title="" data-bs-original-title="Edit info" aria-label="Edit"><i class="bi bi-pencil-fill"></i></a>
                    <a href="javascript:;" class="text-danger" data-bs-toggle="tooltip" data-bs-placement="bottom" title="" data-bs-original-title="Delete" aria-label="Delete"><i class="bi bi-trash-fill"></i></a>
                  </div>
                </td>
              </tr>
              <tr>
                <td>#38567</td>
                <td>
                  <div class="d-flex align-items-center gap-3">
                    <div class="product-box border">
                       <img src="https://via.placeholder.com/400X300" alt="">
                    </div>
                    <div class="product-info">
                      <h6 class="product-name mb-1">sadman</h6>
                    </div>
                  </div>
                </td>
                <td>3</td>
                <td>$356</td>
                <td>Apr 10, 2021</td>
                <td>
                  <div class="d-flex align-items-center gap-3 fs-6">
                    <a href="javascript:;" class="text-primary" data-bs-toggle="tooltip" data-bs-placement="bottom" title="" data-bs-original-title="View detail" aria-label="Views"><i class="bi bi-eye-fill"></i></a>
                    <a href="javascript:;" class="text-warning" data-bs-toggle="tooltip" data-bs-placement="bottom" title="" data-bs-original-title="Edit info" aria-label="Edit"><i class="bi bi-pencil-fill"></i></a>
                    <a href="javascript:;" class="text-danger" data-bs-toggle="tooltip" data-bs-placement="bottom" title="" data-bs-original-title="Delete" aria-label="Delete"><i class="bi bi-trash-fill"></i></a>
                  </div>
                </td>
              </tr>
              <tr>
                <td>#48572</td>
                <td>
                  <div class="d-flex align-items-center gap-3">
                    <div class="product-box border">
                       <img src="https://via.placeholder.com/400X300" alt="">
                    </div>
                    <div class="product-info">
                      <h6 class="product-name mb-1">labiba</h6>
                    </div>
                  </div>
                </td>
                <td>1</td>
                <td>$149</td>
                <td>Apr 11, 2021</td>
                <td>
                  <div class="d-flex align-items-center gap-3 fs-6">
                    <a href="javascript:;" class="text-primary" data-bs-toggle="tooltip" data-bs-placement="bottom" title="" data-bs-original-title="View detail" aria-label="Views"><i class="bi bi-eye-fill"></i></a>
                    <a href="javascript:;" class="text-warning" data-bs-toggle="tooltip" data-bs-placement="bottom" title="" data-bs-original-title="Edit info" aria-label="Edit"><i class="bi bi-pencil-fill"></i></a>
                    <a href="javascript:;" class="text-danger" data-bs-toggle="tooltip" data-bs-placement="bottom" title="" data-bs-original-title="Delete" aria-label="Delete"><i class="bi bi-trash-fill"></i></a>
                  </div>
                </td>
              </tr>
              <tr>
                <td>#96857</td>
                <td>
                  <div class="d-flex align-items-center gap-3">
                    <div class="product-box border">
                       <img src="https://via.placeholder.com/400X300" alt="">
                    </div>
                    <div class="product-info">
                      <h6 class="product-name mb-1">asiuf</h6>
                    </div>
                  </div>
                </td>
                <td>2</td>
                <td>$199</td>
                <td>Apr 15, 2021</td>
                <td>
                  <div class="d-flex align-items-center gap-3 fs-6">
                    <a href="javascript:;" class="text-primary" data-bs-toggle="tooltip" data-bs-placement="bottom" title="" data-bs-original-title="View detail" aria-label="Views"><i class="bi bi-eye-fill"></i></a>
                    <a href="javascript:;" class="text-warning" data-bs-toggle="tooltip" data-bs-placement="bottom" title="" data-bs-original-title="Edit info" aria-label="Edit"><i class="bi bi-pencil-fill"></i></a>
                    <a href="javascript:;" class="text-danger" data-bs-toggle="tooltip" data-bs-placement="bottom" title="" data-bs-original-title="Delete" aria-label="Delete"><i class="bi bi-trash-fill"></i></a>
                  </div>
                </td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
      </div>
    
    </main>
@endsection
