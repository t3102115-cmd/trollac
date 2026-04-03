<?php
// TrollAC - Home Page
require_once __DIR__ . '/config.php';
require_once __DIR__ . '/auth/session.php';
require_once __DIR__ . '/lang.php';

$user = getCurrentUser();
?>
<!DOCTYPE html>
<html lang="<?= getCurrentLanguage() ?>">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= APP_TITLE ?> - TrollAC</title>
    <link rel="stylesheet" href="/css/style.css">
</head>
<body>
    <div class="lang-switcher">
        <?php foreach (getAvailableLanguages() as $code => $name): ?>
            <a href="?lang=<?= $code ?>" class="<?= getCurrentLanguage() === $code ? 'active' : '' ?>">
                <?= $name ?>
            </a>
        <?php endforeach; ?>
    </div>

    <div class="container">
        <nav class="navbar">
            <a href="/" class="navbar-brand"><?= APP_NAME ?></a>
            <div class="navbar-menu">
                <?php if ($user): ?>
                    <a href="/dashboard"><?= t('nav_dashboard') ?></a>
                    <a href="/dashboard?logout=1" class="btn btn-danger"><?= t('nav_logout') ?></a>
                <?php else: ?>
                    <a href="/login" class="btn btn-primary"><?= t('nav_login') ?></a>
                    <a href="/register" class="btn btn-secondary"><?= t('nav_register') ?></a>
                <?php endif; ?>
                <button id="theme-toggle" class="btn btn-ghost" title="Toggle theme">
                    <svg class="theme-icon theme-icon--dark" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 12.79A9 9 0 1 1 11.21 3 7 7 0 0 0 21 12.79z"/></svg>
                    <svg class="theme-icon theme-icon--light" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="5"/><line x1="12" y1="1" x2="12" y2="3"/><line x1="12" y1="21" x2="12" y2="23"/><line x1="4.22" y1="4.22" x2="5.64" y2="5.64"/><line x1="18.36" y1="18.36" x2="19.78" y2="19.78"/><line x1="1" y1="12" x2="3" y2="12"/><line x1="21" y1="12" x2="23" y2="12"/><line x1="4.22" y1="19.78" x2="5.64" y2="18.36"/><line x1="18.36" y1="5.64" x2="19.78" y2="4.22"/></svg>
                </button>
            </div>
        </nav>
        
        <div class="hero">
            <div class="hero-glow"></div>
            <h1 class="hero-title"><?= t('hero_title') ?></h1>
            <h2 class="hero-subtitle"><?= t('hero_subtitle') ?></h2>
            
            <?php if ($user): ?>
                <p class="hero-lead" style="color: var(--success);"><?= t('hero_welcome') ?>, <?= htmlspecialchars($user) ?>!</p>
                <div class="hero-actions">
                    <a href="/dashboard" class="btn btn-primary btn-glow"><?= t('hero_go_dashboard') ?></a>
                    <a href="/api/download.php" class="btn btn-secondary">
                        <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4"/><polyline points="7 10 12 15 17 10"/><line x1="12" y1="15" x2="12" y2="3"/></svg>
                        <?= t('download_btn') ?>
                    </a>
                </div>
            <?php else: ?>
                <p class="hero-lead"><?= t('hero_lead') ?></p>
                <div class="hero-actions">
                    <a href="/register" class="btn btn-primary btn-glow"><?= t('hero_get_started') ?></a>
                    <a href="/login" class="btn btn-secondary"><?= t('nav_login') ?></a>
                </div>
            <?php endif; ?>
            
            <div class="features-card">
                <h3 class="features-title"><?= t('features_title') ?></h3>
                <ul class="features-list">
                    <li><?= t('feature_grim') ?></li>
                    <li><?= t('feature_ml') ?></li>
                    <li><?= t('feature_heuristic') ?></li>
                    <li><?= t('feature_fabric') ?></li>
                    <li><?= t('feature_account') ?></li>
                    <li><?= t('feature_stats') ?></li>
                </ul>
            </div>

            <div class="download-section">
                <div class="download-card-home">
                    <div class="download-card-inner">
                        <div class="download-icon">
                            <svg width="40" height="40" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4"/><polyline points="7 10 12 15 17 10"/><line x1="12" y1="15" x2="12" y2="3"/></svg>
                        </div>
                        <div class="download-info">
                            <h3><?= t('download_title') ?></h3>
                            <p><?= t('download_desc') ?></p>
                            <div class="download-meta">
                                <span class="download-badge"><?= t('download_version') ?>: <?= PLUGIN_VERSION ?></span>
                                <span class="download-badge"><?= PLUGIN_FILE ?></span>
                            </div>
                        </div>
                        <div class="download-action">
                            <?php if ($user): ?>
                                <a href="/api/download.php" class="btn btn-primary btn-glow btn-lg">
                                    <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4"/><polyline points="7 10 12 15 17 10"/><line x1="12" y1="15" x2="12" y2="3"/></svg>
                                    <?= t('download_btn') ?>
                                </a>
                            <?php else: ?>
                                <a href="/login?download=1" class="btn btn-primary btn-glow btn-lg">
                                    <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4"/><polyline points="7 10 12 15 17 10"/><line x1="12" y1="15" x2="12" y2="3"/></svg>
