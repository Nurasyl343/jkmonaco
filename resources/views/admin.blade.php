@extends('imports.head')

@section('main')
    <section class="u-clearfix u-grey-5 u-section-3" id="sec-242f">
        <div class="u-clearfix u-sheet u-sheet-1">
            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                @csrf
            </form>
            <button onclick="event.preventDefault(); document.getElementById('logout-form').submit();" style="margin-left: auto" class="u-btn u-btn-round u-button-style u-hover-palette-2-base u-palette-3-base u-radius u-btn-1">
                Выйти
            </button>
            <h4 class="u-text u-text-default u-text-1" style="margin-bottom: 20px">Заявки от посетителей</h4>
            <div class="u-expanded-width u-table u-table-responsive u-table-1">
                <table class="u-table-entity">
                    <colgroup>
                        <col width="33.3%">
                        <col width="33.3%">
                        <col width="33.4%">
                    </colgroup>
                    <tbody class="u-table-body">
                    <tr style="height: 45px;">
                        <td class="u-border-1 u-border-grey-dark-1 u-table-cell"> Имя клиента</td>
                        <td class="u-border-1 u-border-grey-dark-1 u-table-cell"> Номер телефона</td>
                        <td class="u-border-1 u-border-grey-dark-1 u-table-cell"> Электронная почта</td>
                    </tr>
                    @foreach($applications as $application)
                        <tr style="height: 45px;">
                            <td class="u-border-1 u-border-grey-dark-1 u-table-cell">{{ $application['name'] }}</td>
                            <td class="u-border-1 u-border-grey-dark-1 u-table-cell">{{ $application['phone_number'] }}</td>
                            <td class="u-border-1 u-border-grey-dark-1 u-table-cell">{{ $application['email'] }}</td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
            <a href="{{ route('adminExcel') }}" class="u-btn u-btn-round u-button-style u-hover-palette-2-base u-palette-3-base u-radius u-btn-1">
            <span class="u-icon u-icon-1">
                <svg class="u-svg-content" viewBox="0 0 512 512" x="0px" y="0px" style="width: 1em; height: 1em;">
                    <path d="M382.56,233.376C379.968,227.648,374.272,224,368,224h-64V16c0-8.832-7.168-16-16-16h-64c-8.832,0-16,7.168-16,16v208h-64
                            c-6.272,0-11.968,3.68-14.56,9.376c-2.624,5.728-1.6,12.416,2.528,17.152l112,128c3.04,3.488,7.424,5.472,12.032,5.472
                            c4.608,0,8.992-2.016,12.032-5.472l112-128C384.192,245.824,385.152,239.104,382.56,233.376z"></path>
                    <path d="M432,352v96H80v-96H16v128c0,17.696,14.336,32,32,32h416c17.696,0,32-14.304,32-32V352H432z"></path>
                </svg>
            </span>&nbsp;Скачать Excel
            </a>
        </div>
    </section>
@endsection
