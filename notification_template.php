<?php 
/* Template Name: Notification Listing */ 

include "landing-header.php";
?>
<div class="sticky-notification-header d-none">
    <div class="container">
        <div class="inner-container">
            <div class="row">
                <div class="col-6">
                    <div class="header-box-inner left">
                        <div class="icon-container">
                            <svg width="22" height="18" viewBox="0 0 22 18" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M5.36084 6.24785L10.5215 10.3869C10.6586 10.4969 10.8273 10.5565 11.001 10.5565C11.1746 10.5565 11.3434 10.4969 11.4805 10.3869L19.1284 4.25282L18.1694 2.98088L11.001 8.7303L6.39356 5.03482C6.83755 4.29268 7.0782 3.44031 7.08989 2.56837C7.10158 1.69643 6.88389 0.837528 6.45996 0.0830078H21.1572C21.3644 0.0830078 21.5631 0.16789 21.7097 0.318982C21.8562 0.470073 21.9385 0.674996 21.9385 0.888672V17.002C21.9385 17.2156 21.8562 17.4206 21.7097 17.5716C21.5631 17.7227 21.3644 17.8076 21.1572 17.8076H0.844727C0.637526 17.8076 0.438812 17.7227 0.292299 17.5716C0.145786 17.4206 0.0634766 17.2156 0.0634766 17.002V6.68593C0.88518 7.17615 1.83212 7.39681 2.77839 7.31856C3.72465 7.2403 4.62539 6.86685 5.36084 6.24785Z"
                                    fill="#15426B"></path>
                            </svg>
                        </div>
                        <h3>Notifications</h3>
                    </div>
                </div>
                <div class="col-6">
                    <div class="header-box-inner right">
                        <h3>Mark as read</h3>
                        <div class="icon-container">
                            <svg width="26" height="15" viewBox="0 0 26 15" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M19.2507 1.7373L17.7819 0.268555L11.1777 6.87272L12.6465 8.34147L19.2507 1.7373ZM23.6673 0.268555L12.6465 11.2894L8.29232 6.94564L6.82357 8.41439L12.6465 14.2373L25.1465 1.7373L23.6673 0.268555ZM0.927734 8.41439L6.75065 14.2373L8.2194 12.7686L2.4069 6.94564L0.927734 8.41439Z"
                                    fill="#1E75E5"></path>
                            </svg>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="page-notification">
    <div class="container">
        <div class="notificaiton-inner-container">
            <div class="notification-inner">
                <div class="header-box">
                    <div class="row">
                        <div class="col-6">
                            <div class="header-box-inner left">
                                <div class="icon-container">
                                    <svg width="22" height="18" viewBox="0 0 22 18" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M5.36084 6.24785L10.5215 10.3869C10.6586 10.4969 10.8273 10.5565 11.001 10.5565C11.1746 10.5565 11.3434 10.4969 11.4805 10.3869L19.1284 4.25282L18.1694 2.98088L11.001 8.7303L6.39356 5.03482C6.83755 4.29268 7.0782 3.44031 7.08989 2.56837C7.10158 1.69643 6.88389 0.837528 6.45996 0.0830078H21.1572C21.3644 0.0830078 21.5631 0.16789 21.7097 0.318982C21.8562 0.470073 21.9385 0.674996 21.9385 0.888672V17.002C21.9385 17.2156 21.8562 17.4206 21.7097 17.5716C21.5631 17.7227 21.3644 17.8076 21.1572 17.8076H0.844727C0.637526 17.8076 0.438812 17.7227 0.292299 17.5716C0.145786 17.4206 0.0634766 17.2156 0.0634766 17.002V6.68593C0.88518 7.17615 1.83212 7.39681 2.77839 7.31856C3.72465 7.2403 4.62539 6.86685 5.36084 6.24785Z"
                                            fill="#15426B"></path>
                                    </svg>
                                </div>
                                <h3>Notifications</h3>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="header-box-inner right">
                                <h3>Mark as read</h3>
                                <div class="icon-container">
                                    <svg width="26" height="15" viewBox="0 0 26 15" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M19.2507 1.7373L17.7819 0.268555L11.1777 6.87272L12.6465 8.34147L19.2507 1.7373ZM23.6673 0.268555L12.6465 11.2894L8.29232 6.94564L6.82357 8.41439L12.6465 14.2373L25.1465 1.7373L23.6673 0.268555ZM0.927734 8.41439L6.75065 14.2373L8.2194 12.7686L2.4069 6.94564L0.927734 8.41439Z"
                                            fill="#1E75E5"></path>
                                    </svg>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="notification-container today">
                    <div class="header-box-secondary">
                        <h3>Today</h3>
                    </div>

                    <ul class="notification-list">
                        <!-- <li class="notification-item">
                            Lorem ipsum dolor sit amet consectetur. Lorem ipsum dolor sit
                            amet consectetur.Lorem ipsum dolor sit amet consectetur.
                        </li>
                        <li class="notification-item">
                            Lorem ipsum dolor sit amet consectetur. Lorem ipsum dolor sit
                            amet consectetur.Lorem ipsum dolor sit amet consectetur.
                        </li> -->
                    </ul>
                </div>
                <!-- <div class="notification-container yesterday">
                    <div class="header-box-secondary">
                        <h3>Yesterday</h3>
                    </div>

                    <ul class="notification-list">
                        <li class="notification-item">
                            Lorem ipsum dolor sit amet consectetur. Lorem ipsum dolor sit
                            amet consectetur.Lorem ipsum dolor sit amet consectetur.
                        </li>
                        <li class="notification-item">
                            Lorem ipsum dolor sit amet consectetur. Lorem ipsum dolor sit
                            amet consectetur.Lorem ipsum dolor sit amet consectetur.
                        </li>
                        <li class="notification-item">
                            Lorem ipsum dolor sit amet consectetur. Lorem ipsum dolor sit
                            amet consectetur.Lorem ipsum dolor sit amet consectetur.
                        </li>
                        <li class="notification-item">
                            Lorem ipsum dolor sit amet consectetur. Lorem ipsum dolor sit
                            amet consectetur.Lorem ipsum dolor sit amet consectetur.
                        </li>
                        <li class="notification-item">
                            Lorem ipsum dolor sit amet consectetur. Lorem ipsum dolor sit
                            amet consectetur.Lorem ipsum dolor sit amet consectetur.
                        </li>
                        <li class="notification-item">
                            Lorem ipsum dolor sit amet consectetur. Lorem ipsum dolor sit
                            amet consectetur.Lorem ipsum dolor sit amet consectetur.
                        </li>
                        <li class="notification-item">
                            Lorem ipsum dolor sit amet consectetur. Lorem ipsum dolor sit
                            amet consectetur.Lorem ipsum dolor sit amet consectetur.
                        </li>
                        <li class="notification-item">
                            Lorem ipsum dolor sit amet consectetur. Lorem ipsum dolor sit
                            amet consectetur.Lorem ipsum dolor sit amet consectetur.
                        </li>
                        <li class="notification-item">
                            Lorem ipsum dolor sit amet consectetur. Lorem ipsum dolor sit
                            amet consectetur.Lorem ipsum dolor sit amet consectetur.
                        </li>
                        <li class="notification-item">
                            Lorem ipsum dolor sit amet consectetur. Lorem ipsum dolor sit
                            amet consectetur.Lorem ipsum dolor sit amet consectetur.
                        </li>
                        <li class="notification-item">
                            Lorem ipsum dolor sit amet consectetur. Lorem ipsum dolor sit
                            amet consectetur.Lorem ipsum dolor sit amet consectetur.
                        </li>
                        <li class="notification-item">
                            Lorem ipsum dolor sit amet consectetur. Lorem ipsum dolor sit
                            amet consectetur.Lorem ipsum dolor sit amet consectetur.
                        </li>
                        <li class="notification-item">
                            Lorem ipsum dolor sit amet consectetur. Lorem ipsum dolor sit
                            amet consectetur.Lorem ipsum dolor sit amet consectetur.
                        </li>
                        <li class="notification-item">
                            Lorem ipsum dolor sit amet consectetur. Lorem ipsum dolor sit
                            amet consectetur.Lorem ipsum dolor sit amet consectetur.
                        </li>
                    </ul>
                </div>
                <div class="notification-container older">
                    <div class="header-box-secondary">
                        <h3>older</h3>
                    </div>

                    <ul class="notification-list">
                        <li class="notification-item read">
                            Lorem ipsum dolor sit amet consectetur. Lorem ipsum dolor sit
                            amet consectetur.Lorem ipsum dolor sit amet consectetur.
                        </li>
                        <li class="notification-item">
                            Lorem ipsum dolor sit amet consectetur. Lorem ipsum dolor sit
                            amet consectetur.Lorem ipsum dolor sit amet consectetur.
                        </li>
                    </ul>
                </div> -->
            </div>
        </div>
    </div>
</div>

<?php
 include 'landing-footer.php'; 
?>