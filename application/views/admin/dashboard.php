<style>
    :root {
        --primary-color: #014b85;
        --secondary-color: #0a2e50;
        --accent-color: #3498db;
        --light-color: #f8f9fa;
        --dark-color: #343a40;
        --success-color: #28a745;
        --info-color: #17a2b8;
        --warning-color: #ffc107;
        --danger-color: #dc3545;
        --transition-speed: 0.3s;
    }

    .dashboard-container {
        padding: 20px;
    }

    .dashboard-title {
        color: var(--primary-color);
        font-size: 24px;
        font-weight: 500;
        margin-bottom: 25px;
        text-align: center;
    }

    .module-card {
        background: white;
        border-radius: 15px;
        box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
        margin-bottom: 25px;
        overflow: hidden;
        transition: all var(--transition-speed) ease;
        height: 100%;
        position: relative;
    }

    /* .module-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 15px 30px rgba(0, 0, 0, 0.15);
    } */

    .module-card:hover .icon {
        background: linear-gradient(135deg, var(--primary-color) 0%, var(--secondary-color) 100%);
        color: white;
        transform: scale(1.1);
    }

    .module-card:hover .module-name {
        color: var(--primary-color);
    }

    .module-link {
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
        padding: 25px 15px;
        text-decoration: none;
        height: 100%;
    }

    .module-link:hover {
        text-decoration: none;
    }

    .icon-container {
        margin-bottom: 15px;
        position: relative;
    }

    .icon {
        width: 90px;
        height: 90px;
        background-color: #f8f9fa;
        border-radius: 50%;
        display: flex;
        justify-content: center;
        align-items: center;
        font-size: 40px;
        color: var(--primary-color);
        transition: all var(--transition-speed) ease;
        box-shadow: 0 5px 15px rgba(0, 0, 0, 0.08);
    }

    .module-name {
        margin: 0;
        font-size: 18px;
        font-weight: 500;
        text-align: center;
        color: var(--dark-color);
        transition: color var(--transition-speed) ease;
    }

    /* Responsiveness */
    @media (max-width: 1200px) {
        .icon {
            width: 80px;
            height: 80px;
            font-size: 35px;
        }
    }

    @media (max-width: 992px) {
        .module-col {
            flex: 0 0 33.333333%;
            max-width: 33.333333%;
        }
    }

    @media (max-width: 768px) {
        .module-col {
            flex: 0 0 50%;
            max-width: 50%;
        }

        .icon {
            width: 70px;
            height: 70px;
            font-size: 30px;
        }
    }

    @media (max-width: 576px) {
        .module-col {
            flex: 0 0 100%;
            max-width: 100%;
        }

        .dashboard-container {
            padding: 15px 10px;
        }
    }
</style>

<div class="dashboard-container">
    <div class="row">
        <?php foreach ($module as $k) : ?>
            <?php if ($k->status == 1) { ?>
                <div class="col-lg-2 col-md-4 col-sm-6 module-col">
                    <div class="module-card">
                        <a href="<?= base_url($k->url) ?>" class="module-link" title="<?= $k->name ?>">
                            <div class="icon-container">
                                <i class="<?= $k->icon ?> icon"></i>
                            </div>
                            <h5 class="module-name"><?= $k->name ?></h5>
                        </a>
                    </div>
                </div>
            <?php } ?>
        <?php endforeach; ?>
    </div>
</div>