@extends('layouts.app')

@section('content')
<main class="page-content">
    <!--breadcrumb-->
    <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
      <div class="breadcrumb-title pe-3">Dominate </div>
      <div class="ps-3">
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb mb-0 p-0">
            <li class="breadcrumb-item"><a href=""><i class="bx bx-home-alt"></i></a>
            </li>
            <li class="breadcrumb-item active" aria-current="page">Products List</li>
          </ol>
        </nav>
      </div>
    </div>
    <!--end breadcrumb-->

      <div class="card">
        <div class="card-header py-3">
          <div class="row align-items-center m-0">
         </div>
        </div>
        <div class="card-body">

          <div class="table-responsive">
            <table class="table align-middle table-striped">
              <tbody>
                <tr>
                  <td>
                  </td>
                  <td class="productlist">
                    <a class="d-flex align-items-center gap-2" href="#">
                      <div class="product-box">
                          <img src="https://via.placeholder.com/400X300" alt="">
                      </div>
                      <div>
                          <h6 class="mb-0 product-title">Men White Polo T-shirt</h6>
                      </div>
                     </a>
                  </td>
                  <td><span>$18.00</span></td>
                  <td><span class="badge rounded-pill alert-success">Active</span></td>
                  <td><span>5-31-2020</span></td>
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

    <nav class="float-end mt-4" aria-label="Page navigation">
      <ul class="pagination">
        <li class="page-item disabled"><a class="page-link" href="#">Previous</a></li>
        <li class="page-item active"><a class="page-link" href="#">1</a></li>
        <li class="page-item"><a class="page-link" href="#">2</a></li>
        <li class="page-item"><a class="page-link" href="#">3</a></li>
        <li class="page-item"><a class="page-link" href="#">Next</a></li>
      </ul>
    </nav>

</div>
</div>

  </main>
@endsection