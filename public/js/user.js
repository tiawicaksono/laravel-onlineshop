// $(function () {
//     fill_datatable();
// });
$.ajaxSetup({
    headers: {
        "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content"),
    },
});
function prosesSearch() {
    var chooseValidasi = $("#choose_approval :selected").val();
    if (chooseValidasi == "true") {
        $("#btn-batal").prop("disabled", false);
        $("#btn-valid").prop("disabled", true);
    } else {
        $("#btn-valid").prop("disabled", false);
        $("#btn-batal").prop("disabled", true);
    }
    $("#table-user").datagrid("reload");
}
$("#table-user").datagrid({
    url: "/user/show",
    width: "100%",
    //        view: scrollview,
    rownumbers: true,
    singleSelect: false,
    pagination: true,
    selectOnCheck: false,
    checkOnSelect: true,
    collapsible: true,
    striped: true,
    loadMsg: "Loading...",
    method: "POST",
    nowrap: false,
    pageNumber: 1,
    pageSize: 20,
    pageList: [20, 50, 100, 250],
    columns: [
        [
            {
                field: "CHECKED",
                align: "center",
                checkbox: true,
            },
            {
                field: "approve",
                width: 50,
                halign: "center",
                align: "center",
                formatter: ButtonApprove,
            },
            {
                field: "id",
                hidden: true,
            },
            {
                field: "name",
                width: 110,
                title: "NAME",
                sortable: false,
            },
            {
                field: "email",
                title: "EMAIL",
                width: 200,
                sortable: false,
            },
        ],
    ],
    onBeforeLoad: function (params) {
        params.chooseValidasi = $("#choose_approval :selected").val();
    },
    onLoadError: function () {
        return false;
    },
    onLoadSuccess: function () {},
});

function ButtonApprove(value) {
    let button;
    const topButtonApprove = $("#choose_approval :selected").val();
    if (topButtonApprove == "false") {
        button =
            '<button type="button" data-toggle="tooltip" title="Valid" class="btn btn-primary" onclick="prosesValid(' +
            value +
            ', \'true\')"><i class="bi bi-arrow-repeat"></i></button>';
    } else {
        button =
            '<button type="button" data-toggle="tooltip" title="Batal" class="btn btn-danger" onclick="prosesValid(' +
            value +
            ', \'false\')"><i class="bi bi-arrow-repeat"></i></button>';
    }
    return button;
}

function prosesValid(id, kondisi) {
    $.ajax({
        type: "POST",
        url: "user/approveUser",
        data: { id: id, kondisi: kondisi },
        beforeSend: function () {},
        success: function (data) {
            prosesSearch();
        },
        error: function () {
            return false;
        },
    });
}

function prosesValidChecked(kondisi) {
    var rows = $("#table-user").datagrid("getChecked");
    var ids = [];
    for (var i = 0; i < rows.length; i++) {
        ids.push(rows[i].id);
    }
    if (rows.length > 0) {
        $.ajax({
            type: "POST",
            url: "user/approveUserChecked",
            data: { idArray: ids, kondisi: kondisi },
            beforeSend: function () {},
            success: function (data) {
                prosesSearch();
            },
            error: function () {
                return false;
            },
        });
    } else {
        $.messager.alert(
            "Warning",
            "You must select at least one item!",
            "error"
        );
        return false;
    }
}
