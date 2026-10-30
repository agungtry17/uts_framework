<!-- Search Modal -->
        <div class="modal fade search-modal" id="searchModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="searchModalLabel" aria-hidden="true">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header d-block">
                  <div class="form-icon">
                    <input type="text" class="form-control form-control-icon" id="searchInputInModal" placeholder="Search" required>
                    <div class="search-btn w-44px">
                      <i class="ri-search-line text-muted fs-16"></i>
                    </div>
                    <button type="button" class="btn-close position-absolute end-0 top-50 translate-middle-y d-inline-block m-0" data-bs-dismiss="modal" aria-label="Close"></button>
                  </div>
                </div>
                <div class="modal-body" data-simplebar id="list-items">
                  <ul class="list-unstyled mb-0" id="searchList"></ul>
                </div>
              </div>
            </div>
          </div>
