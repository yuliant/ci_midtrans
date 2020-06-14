<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Welcome to CodeIgniter</title>

    <style type="text/css">
        ::selection {
            background-color: #E13300;
            color: white;
        }

        ::-moz-selection {
            background-color: #E13300;
            color: white;
        }

        body {
            background-color: #fff;
            margin: 40px;
            font: 13px/20px normal Helvetica, Arial, sans-serif;
            color: #4F5155;
        }

        a {
            color: #003399;
            background-color: transparent;
            font-weight: normal;
        }

        h1 {
            color: #444;
            background-color: transparent;
            border-bottom: 1px solid #D0D0D0;
            font-size: 19px;
            font-weight: normal;
            margin: 0 0 14px 0;
            padding: 14px 15px 10px 15px;
        }

        code {
            font-family: Consolas, Monaco, Courier New, Courier, monospace;
            font-size: 12px;
            background-color: #f9f9f9;
            border: 1px solid #D0D0D0;
            color: #002166;
            display: block;
            margin: 14px 0 14px 0;
            padding: 12px 10px 12px 10px;
        }

        #body {
            margin: 0 15px 0 15px;
        }

        p.footer {
            text-align: right;
            font-size: 11px;
            border-top: 1px solid #D0D0D0;
            line-height: 32px;
            padding: 0 10px 0 10px;
            margin: 20px 0 0 0;
        }

        #container {
            margin: 10px;
            border: 1px solid #D0D0D0;
            box-shadow: 0 0 8px #D0D0D0;
        }
    </style>
</head>

<body>

    <div id="container">
        <h1>Confirmation</h1>

        <div id="body">
            <table>
                <tr>
                    <td>Status Code</td>
                    <td>:<?php echo $finish->status_code; ?></td>
                </tr>
                <tr>
                    <td>Status Message</td>
                    <td>:<?php echo $finish->status_message; ?></td>
                </tr>
                <tr>
                    <td>Order ID</td>
                    <td>:<?php echo $finish->order_id; ?></td>
                </tr>
                <tr>
                    <td>Transaktion Status</td>
                    <td>:<?php echo $finish->transaction_status; ?></td>
                </tr>
                <tr>
                    <td>Bill Key</td>
                    <td>:<?php
                            if (isset($finish->bill_key)) {
                                echo $finish->bill_key;
                            } else {
                                echo "-";
                            }
                            ?></td>
                </tr>
                <tr>
                    <td>Biller Code</td>
                    <td>:
                        <?php
                        if (isset($finish->biller_code)) {
                            echo $finish->biller_code;
                        } else {
                            echo "-";
                        }
                        ?></td>
                </tr>


                <tr>
                    <td>Bank</td>
                    <td>: <?php
                            if (isset($finish->va_numbers[0]->bank)) {
                                echo $finish->va_numbers[0]->bank;
                            } else {
                                echo "-";
                            }
                            ?></td>
                </tr>


                <tr>
                    <td>VA Number</td>
                    <td>:
                        <?php
                        if (isset($finish->va_numbers[0]->va_number)) {
                            echo $finish->va_numbers[0]->va_number;
                        } else {
                            echo "-";
                        }
                        ?></td>
                </tr>
                <tr>
                    <td>VA Permata</td>
                    <td>:
                        <?php
                        if (isset($finish->permata_va_number)) {
                            echo $finish->permata_va_number;
                        } else {
                            echo "-";
                        }
                        ?></td>
                </tr>

                <tr>
                    <td>Panduan Pembayaran</td>
                    <td>:<a href=<?php echo $finish->pdf_url; ?> target=_blank>Payment Guide</a></td>
                </tr>
            </table>
        </div>


        <p class="footer"><a href="<?php echo base_url() ?>">KEMBALI</a> | Page rendered in <strong>{elapsed_time}</strong> seconds. <?php echo (ENVIRONMENT === 'development') ?  'CodeIgniter Version <strong>' . CI_VERSION . '</strong>' : '' ?></p>
    </div>

</body>

</html>