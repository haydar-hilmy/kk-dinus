<?= $this->extend('layouts/main') ?>

<?= $this->section('content') ?>

<?php if(session('superadmin')){ ?> 
    
<?= $this->include('admin-layouts/main-admin') ?>

<?php } else { ?>

<?= $this->include('layouts/index/banner') ?>

<article>
    <div class="primary">
        <h2>Welcome to Computational Materials Design and Quantum Engineering (CMD-QE) Lab at ITB!</h2>
        <p>Our research group utilizes and develops atomistic-based multi-scale materials simulation techniques (e.g. first-principles density functional theory calculations, ab-initio and classical molecular dynamics and kinetic Monte Carlo (kMC)) to study various physical and chemical properties of materials. We have broad interest in various topics related (but not limited) to: solid-state catalysts for various chemical reactions (e.g. direct methane-to-methanol conversion, oxygen reduction reaction (ORR), etc.); electronic and ionic conductivities in solid state materials and polymers; materials for hydrogen and direct-hydrazine fuel cells; materials for drug delivery; materials for gas sensors; and materials for energy conversion and storage (e.g. photovoltaic, Li/Na-ion batteries, Metal-air batteries, etc.). Our recent effort also include machine-learning and data-driven-based approach to accelerate the discovery of new functional materials. Beyond materials-related research, our group also interested in the theoretical study related to quantum technologies (e.g. quantum computing, quantum thermodynamics and quantum measurement).</p>
    </div>

    <div class="secondary">
        <div class="widget">
            <aside>
                <h3>Recent Post</h3>
                <ul>
                    <li><a href="#">Webinar Series</a></li>
                    <li><a href="#">Webinar Series</a></li>
                    <li><a href="#">Webinar Series</a></li>
                    <li><a href="#">Webinar Series</a></li>
                </ul>
            </aside>
        </div>
    </div>

</article>

<script src="js/carousel.js"></script>

<?php } ?>


<?= $this->endSection() ?>