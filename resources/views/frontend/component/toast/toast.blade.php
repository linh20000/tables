<ul class="notifications" style="z-index:1000;">
    <!-- li toast -->
</ul>

<style>
    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        font-family: 'Poppins', sans-serif;
    }


    :root {
        --dark: #34495e;
        --light: #fff;
        --success: #0abf30;
        --error: #f24d4c;
        --warning: #e9bd0c;
        --info: #3498db;
    }


    .notifications {
        position: fixed;
        top: 30px;
        right: 20px;
    }

    .notifications :where(.toast, .column) {
        display: flex;
        align-items: center;
    }

    .notifications .toast {
        width: 400px;
        position: relative;
        overflow: hidden;
        list-style: none;
        border-radius: 4px;
        padding: 16px 17px;
        margin-bottom: 10px;
        background: var(--light);
        justify-content: space-between;
        animation: show_toast 0.3s ease forwards;
        box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;
    }

    @keyframes show_toast {
        0% {
            transform: translateX(100%);
        }
        40% {
            transform: translateX(-5%);
        }
        80% {
            transform: translateX(0%);
        }
        100% {
            transform: translateX(-10%);
        }
    }

    .notifications .toast.hide {
        animation: hide_toast 0.3s ease forwards;
    }

    @keyframes hide_toast {
        0% {
            transform: translateX(-10%);
        }
        40% {
            transform: translateX(0%);
        }
        80% {
            transform: translateX(-5%);
        }
        100% {
            transform: translateX(calc(100% + 20px));
        }
    }

    .toast::before {
        position: absolute;
        content: '';
        height: 5px;
        width: 100%;
        bottom: 0;
        left: 0;
        animation: progress 5s linear forwards;
    }

    @keyframes progress {
        100% {
            width: 0%;
        }
    }

    .toast.success::before, .btn#success {
        background: var(--success);
    }


    .toast .column i {
        font-size: 1.75rem;
    }

    .toast.success .column i {
        color: var(--success);
    }


    .toast .column span {
        font-size: 1.07rem;
        margin-left: 12px;
    }

    .toast i:last-child {
        color: #aeb0d7;
        cursor: pointer;
    }

    .toast i:last-child:hover {
        color: var(--dark);
    }
    .buttons {
        display:inline;
    }
    .buttons .btn {
        border: none;
        outline: none;
        color: var(--light);
        cursor: pointer;
        margin: 0 5px;
        font-size: 12px;
        padding: 5px 20px;
        border-radius: 4px;
    }

    @media screen and (max-width: 530px) {
        .notifications {
            width: 80%;
        }
        
        .notifications .toast {
            width: 100%;
            font-size: 1rem;
            margin-left: 20px;
        }
        
        .buttons .btn {
            margin: 0 1px;
            font-sze: 1.1rem;
            padding: 8px 15px;
        }
    }
</style>
