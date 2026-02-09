<div class="topbar shadow-sm">
    <button class="menu-btn" onclick="toggleSidebar()">
        <span class="material-icons">menu</span>
    </button>

    <div class="topbar-actions">
        <button class="btn-outline" onclick="openModal('loginModal')">Login</button>
        <button class="btn-primary" onclick="openModal('registerModal')">Register</button>
    </div>
</div>

<div class="modal-overlay" id="loginModal">
    <div class="modal-card">
        <h5>Login</h5>

        <input type="email" placeholder="Email">
        <input type="password" placeholder="Password">

        <button class="btn-primary w-100 mt-3">Login</button>

        <p class="modal-close" onclick="closeModal('loginModal')">Cancel</p>
    </div>
</div>

<div class="modal-overlay" id="registerModal">
    <div class="modal-card">
        <h5>Register</h5>

        <input type="text" placeholder="Full Name">
        <input type="email" placeholder="Email">
        <input type="password" placeholder="Password">

        <button class="btn-primary w-100 mt-3">Register</button>

        <p class="modal-close" onclick="closeModal('registerModal')">Cancel</p>
    </div>
</div>

