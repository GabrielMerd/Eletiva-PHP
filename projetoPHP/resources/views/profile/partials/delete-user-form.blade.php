<section class="my-5">
    <div class="container">
        <!-- Header Section -->
        <header>
            <h2 class="text-lg fw-medium text-dark">
                Excluir conta
            </h2>
            <p class="mt-1 text-sm text-muted">
                Depois que sua conta for excluída, todos os seus recursos e dados serão excluídos permanentemente. Antes de excluir sua conta, baixe todos os dados ou informações que deseja reter.
            </p>
        </header>

        <!-- Delete Account Button -->
        <button class="btn btn-danger mt-4" data-bs-toggle="modal" data-bs-target="#confirmDeletionModal">
            Excluir Conta
        </button>
    </div>
</section>

<!-- Modal for Deletion Confirmation -->
<div class="modal fade" id="confirmDeletionModal" tabindex="-1" aria-labelledby="confirmDeletionModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <!-- Modal Header -->
            <div class="modal-header">
                <h5 class="modal-title" id="confirmDeletionModalLabel">Confirmar exclusão de conta</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            
            <!-- Modal Body -->
            <div class="modal-body">
                <p>
                    Depois que sua conta for excluída, todos os seus recursos e dados serão excluídos permanentemente.
                </p>
                <p>
                    Digite sua senha para confirmar que deseja excluir permanentemente sua conta.
                </p>
                <!-- Password Input -->
                <div class="mb-3">
                    <label for="password" class="form-label">Password</label>
                    <input type="password" class="form-control" id="password" placeholder="Password" required>
                </div>
            </div>
            
            <!-- Modal Footer -->
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                <form action="/delete-profile" method="POST">
                    @CSRF
                    <input type="hidden" name="_method" value="DELETE">
                    <button type="submit" class="btn btn-danger">Excluir conta</button>
                </form>
            </div>
        </div>
    </div>
</div>