{{--<aside>--}}
    <div class="container">

    </div>
    <table class="table-responsive" hidden>
        @foreach($activityLogs as $log)
            <tr>
                <td class="col-2">
                    {{ $log->description }} {{ $log->updated_at }}
                </td>
                <td class="col-2">
                </td>
            </tr>
            <tr>
                @php
                    $properties = json_decode($log->properties, true);
                    $arrKeys = array_keys($properties['attributes']);
                    $i_new = 0;
                    $i_old = 0;
                @endphp

                <td>
                    <table class="table-responsive">
                        <tr><b>Variabel</b></tr>
                        @foreach($properties['attributes'] as $property)
                            <tr>
                                <td>
                                    <span>{{ $arrKeys[$i_new++] }}</span>
                                </td>
                            </tr>
                        @endforeach
                    </table>
                </td>
                <td>
                    <table class="table-responsive">
                        <tr><b>Sebelum</b></tr>
                        @foreach($properties['old'] as $property)
                            <tr>
                                <td>
                                    <span>{{ $property }}</span>
                                </td>
                            </tr>
                        @endforeach
                    </table>
                </td>
                <td>
                    <table class="table-responsive">
                        <tr><b>Sesudah</b></tr>
                        @foreach($properties['attributes'] as $property)
                            <tr>
                                <td>
                                    <span>{{ $property }}</span>
                                </td>
                            </tr>
                        @endforeach
                    </table>
                </td>
            </tr>
        @endforeach
    </table>

    <script>
        function log(){
            if()
        }
    </script>
{{--</aside>--}}
