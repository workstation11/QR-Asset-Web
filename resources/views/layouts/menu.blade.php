

<li class="{{  Request::is('umurEkonomis*')||Request::is('departemens*')||Request::is('kondisiAsets*')||Request::is('kategoriAsets*') ||Request::is('grubAsets*')||Request::is('vendors*')||Request::is('mereks*')||Request::is('tipes*')||Request::is('asets*')||Request::is('jobsites*')||Request::is('lokasis*') ? 'active' : '' }} nav-item">
    <a href="#"><i class="fa fa-bookmark"></i><span class="menu-title" data-i18n="nav.color_palette.main">Master Data</span></a>
    <ul class="menu-content">
        <ul class="treeview-menu">
            <li class="{{ Request::is('umurEkonomis*') ? 'active' : '' }}">
                <a href="{!! route('umurEkonomis.index') !!}"><i class="fa fa-edit"></i><span>Umur Ekonomis Aset</span></a>
            </li>
            <li class="{{ Request::is('departemens*') ? 'active' : '' }}">
                <a href="{!! route('departemens.index') !!}"><i class="fa fa-edit"></i><span>Departemen</span></a>
            </li>
            <li class="{{ Request::is('kondisiAsets*') ? 'active' : '' }}">
                <a href="{!! route('kondisiAsets.index') !!}"><i class="fa fa-edit"></i><span>Kondisi Aset</span></a>
            </li>
            <li class="{{ Request::is('kategoriAsets*') ? 'active' : '' }}">
                <a href="{!! route('kategoriAsets.index') !!}"><i class="fa fa-edit"></i><span>Kategori Aset</span></a>
            </li>
            <li class="{{ Request::is('grubAsets*') ? 'active' : '' }}">
                <a href="{!! route('grubAsets.index') !!}"><i class="fa fa-edit"></i><span>Grub Aset</span></a>
            </li>
            <li class="{{ Request::is('vendors*') ? 'active' : '' }}">
                <a href="{!! route('vendors.index') !!}"><i class="fa fa-edit"></i><span>Vendor</span></a>
            </li>
            <li class="{{ Request::is('jobsites*') ? 'active' : '' }}">
                <a href="{!! route('jobsites.index') !!}"><i class="fa fa-edit"></i><span>Jobsites</span></a>
            </li>
            <li class="{{ Request::is('mereks*') ? 'active' : '' }}">
                <a href="{!! route('mereks.index') !!}"><i class="fa fa-edit"></i><span>Merek</span></a>
            </li>

            <li class="{{ Request::is('tipes*') ? 'active' : '' }}">
                <a href="{!! route('tipes.index') !!}"><i class="fa fa-edit"></i><span>Tipe</span></a>
            </li>
            <li class="{{ Request::is('lokasis*') ? 'active' : '' }}">
                <a href="{!! route('lokasis.index') !!}"><i class="fa fa-edit"></i><span>Lokasi</span></a>
            </li>
        </ul>
    </ul>
</li>

<li class="{{ Request::is('dataAsets*') ? 'active' : '' }}">
    <a href="{!! route('dataAsets.index') !!}"><i class="fa fa-cloud"></i><span>Data Asset</span></a>
</li>

<li class="{{ Request::is('asetTakings*') ? 'active' : '' }}">
    <a href="{!! route('asetTakings.index') !!}"><i class="fa fa-tasks"></i><span>Status Asset</span></a>
</li>

<li class="{{ Request::is('penggunaAsets*') ? 'active' : '' }}">
    <a href="{!! route('penggunaAsets.index') !!}"><i class="fa fa-users"></i><span>Pengguna Asets</span></a>
</li>

{{--<li class="{{  Request::is('asetPengembalians*')||Request::is('asetMutasis*')|| Request::is('asetPeminjamen*')||Request::is('asetPelepasans*')||Request::is('asetBasts*')||Request::is('asetRusaks*')||Request::is('asetHilangs*')||Request::is('asetPembelians*') ? 'active' : '' }} nav-item">--}}
    {{--<a href="#"><i class="fa fa-cog"></i><span class="menu-title" data-i18n="nav.color_palette.main">Surat Aset</span></a>--}}
    {{--<ul class="menu-content">--}}
        {{--<ul class="treeview-menu">--}}
            {{--<li class="{{ Request::is('asetPembelians*') ? 'active' : '' }}">--}}
                {{--<a href="{!! route('asetPembelians.index') !!}"><i class="fa fa-edit"></i><span>Surat Pembelian Aset</span></a>--}}
            {{--</li>--}}

            {{--<li class="{{ Request::is('asetPengembalians*') ? 'active' : '' }}">--}}
                {{--<a href="{!! route('asetPengembalians.index') !!}"><i class="fa fa-edit"></i><span>Surat Pengembalian Aset</span></a>--}}
            {{--</li>--}}

            {{--<li class="{{ Request::is('asetMutasis*') ? 'active' : '' }}">--}}
                {{--<a href="{!! route('asetMutasis.index') !!}"><i class="fa fa-edit"></i><span>Surat Mutasi Aset</span></a>--}}
            {{--</li>--}}

            {{--<li class="{{ Request::is('asetPeminjamen*') ? 'active' : '' }}">--}}
                {{--<a href="{!! route('asetPeminjamen.index') !!}"><i class="fa fa-edit"></i><span>Surat Peminjaman Aset</span></a>--}}
            {{--</li>--}}

            {{--<li class="{{ Request::is('asetPelepasans*') ? 'active' : '' }}">--}}
                {{--<a href="{!! route('asetPelepasans.index') !!}"><i class="fa fa-edit"></i><span>Surat Pelepasan Aset</span></a>--}}
            {{--</li>--}}

            {{--<li class="{{ Request::is('asetBasts*') ? 'active' : '' }}">--}}
                {{--<a href="{!! route('asetBasts.index') !!}"><i class="fa fa-edit"></i><span>Surat BAST Aset</span></a>--}}
            {{--</li>--}}

            {{--<li class="{{ Request::is('asetRusaks*') ? 'active' : '' }}">--}}
                {{--<a href="{!! route('asetRusaks.index') !!}"><i class="fa fa-edit"></i><span>Surat Aset Rusak</span></a>--}}
            {{--</li>--}}

            {{--<li class="{{ Request::is('asetHilangs*') ? 'active' : '' }}">--}}
                {{--<a href="{!! route('asetHilangs.index') !!}"><i class="fa fa-edit"></i><span>Surat Aset Hilang</span></a>--}}
            {{--</li>--}}
        {{--</ul>--}}
    {{--</ul>--}}
{{--</li>--}}

<li class=" navigation-header">
    <span data-i18n="nav.category.layouts">Pengaturan User</span><i class="ft-more-horizontal ft-minus" data-toggle="tooltip" data-placement="right" data-original-title="Layouts"></i>
</li>

<li class="{{ Request::is('users*') ? 'active' : '' }}">
    <a href="{!! route('users.index') !!}"><i class="fa fa-user"></i><span>Users</span></a>
</li>
<li class="{{ Request::is('roles*') ? 'active' : '' }}">
    <a href="{!! route('roles.index') !!}"><i class="fa fa-random"></i><span>Roles</span></a>
</li>
<li class="{{ Request::is('user_role*') ? 'active' : '' }}">
    <a href="{!! route('user_role.index') !!}"><i class="fa fa-cogs"></i><span>User Role</span></a>
</li>


