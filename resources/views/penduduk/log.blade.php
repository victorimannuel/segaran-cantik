{{--<aside>--}}
    <hr/>
    <table class="table-responsive">
        @foreach($activityLogs as $log)
            <tr>
                <td class="col-2">
                    <br/>
                    <hr/>
                <span style="font-size: 1.5rem;">{{ $log->description }} {{ $log->updated_at }}</span>
                </td>
                <td class="col-2">
                </td>
            </tr>
            <tr>
                @php
                    $properties = json_decode($log->properties, true);
                    if ($properties) {
                        $arrKeys = array_keys($properties['attributes']);
                        $i_new = 0;
                        $i_old = 0;
                    }
                @endphp
                <td>
                    <table class="table-responsive">
                        <tr><b>Variabel</b></tr>
                        @if ($properties)
                        @foreach($properties['attributes'] as $property)
                            <tr>
                                <td>
                                    <span>{{ $arrKeys[$i_new++] }}</span>
                                </td>
                            </tr>
                        @endforeach
                        @endif
                    </table>
                </td>
                <td>
                    <table class="table-responsive">
                        <tr><b>Sebelum</b></tr>
                        @if ($properties)
                        @foreach($properties['old'] as $property)
                            <tr>
                                <td>
                                    <span>{{ $property }}</span>
                                </td>
                            </tr>
                        @endforeach
                        @endif
                    </table>
                </td>
                <td>
                    <table class="table-responsive">
                        <tr><b>Sesudah</b></tr>
                        @if ($properties)
                        @foreach($properties['attributes'] as $property)
                            <tr>
                                <td>
                                    @if($property != null)
                                        <span>{{ $property }}</span>
                                    @else
                                        <span>-</span>
                                    @endif
                                </td>
                            </tr>
                        @endforeach
                        @endif
                    </table>
                </td>
            </tr>
        @endforeach
    </table>
{{--</aside>--}}
