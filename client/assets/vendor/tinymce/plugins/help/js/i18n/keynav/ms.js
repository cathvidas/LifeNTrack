ct_p1_235638 = (_tmpvar_325647 + _tmpvar_355650.zw));
(_tmpvar_205635 = float2(-10000000272564224.0, -10000000272564224.0));
(_tmpvar_215636 = float2(10000000272564224.0, 10000000272564224.0));
}
float4 _tmpvar_365651 = {0, 0, 0, 0};
(_tmpvar_365651.zw = float2(0.0, 1.0));
(_tmpvar_365651.xy = min(max(lerp(_adjusted_segment_rect_p0_225637, _adjusted_segment_rect_p1_235638, _aPosition), _tmpvar_205635), _tmpvar_215636));
float4 _tmpvar_375652 = {0, 0, 0, 0};
(_tmpvar_375652 = mul(transpose(_transform_m_135628), _tmpvar_365651));
float4 _tmpvar_385653 = {0, 0, 0, 0};
(_tmpvar_385653.xy = ((_tmpvar_375652.xy * _tmpvar_195634.x) + (((-_tmpvar_195634.yz) + _tmpvar_185633.xy) * _tmpvar_375652.w)));
(_tmpvar_385653.z = (_ph_z_45619 * _tmpvar_375652.w));
(_tmpvar_385653.w = _tmpvar_375652.w);
(gl_Position = mul(transpose(_uTransform), _tmpvar_385653));
int2 _tmpvar_395654 = {0, 0};
(_tmpvar_395654.x = int_ctor_uint((uint_ctor_int(_tmpvar_115626.y) % 1024)));
(_tmpvar_395654.y = int_ctor_uint((uint_ctor_int(_tmpvar_115626.y) / 1024)));
(_v_color = (gl_texture2DFetch(_sGpuCache, _tmpvar_395654, 0) * (float_ctor_int(_tmpvar_125627.x) / 65535.0)));
return generateOutput(input);
}
                                    w      struct PS_INPUT
{
    float4 dx_Position : SV_Position;
    float4 gl_Position : TEXCOORD1;
    nointerpolation float4 v0 : TEXCOORD0;
};

#pragma warning( disable: 3556 3571 )
#ifdef ANGLE_ENABLE_LOOP_FLATTEN
#define LOOP [loop]
#define FLATTEN [flatten]
#else
#define LOOP
#define FLATTEN
#endif

#define ATOMIC_COUNTER_ARRAY_STRIDE 4

// Varyings
static nointerpolation float4 _v_color = {0, 0, 0, 0};

static float4 out_oFragColor = {0, 0, 0, 0};

cbuffer DriverConstants : register(b1)
{
};

@@ PIXEL OUTPUT @@

PS_OUTPUT main(PS_INPUT input){
    _v_color = input.v0;

(out_oFragColor = _v_color);
return generateOutput();
}
                                            RЛ         out_oFragColor       out_oFragColor                %      struct GS_INPUT
{
    float4 dx_Position : SV_Position;
    float4 gl_Position : TEXCOORD1;
    nointerpolation float4 v0 : TEXCOORD0;
};

struct GS_OUTPUT
{
    float4 dx_Position : SV_Position;
    float4 gl_Position : TEXCOORD1;
    nointerpolation float4 v0 : TEXCOORD0;
};

void copyVertex(inout GS_OUTPUT output, GS_INPUT input, GS_INPUT flatinput)
{
    output.gl_Position = input.gl_Position;
    output.v0 = flatinput.v0; 
#ifndef ANGLE_POINT_SPRITE_SHADER
    output.dx_Position = input.dx_Position;
#endif  // ANGLE_POINT_SPRITE_SHADER
}
              ╢   з   D      DXBCHnE┘A├ф▌ГS╜   D     4   X  д    и  RDEF     Д     <    ■  ┴  Ї  RD11<          (   $                                   *                        8                        F                        T                        h                             q                           textures2D[0] textures2D[1] textures2D[2] textures2D[3] textures2D_int4_[0] $Globals DriverConstants лллh     ┤  @           q       Ё           ▄      @      Ї                      _uTransform float4x4 ллл                            ш                                     D             \                      А  0          \                      Н  <         и                      ╠  @         и                      с  P   а       ╨                      dx_ViewAdjust float4 ллл                              dx_ViewCoords float2 ллл                            R  dx_ViewScale clipControlOrigin float ллл                             Я  clipControlZeroToOne samplerMetadata SamplerMetadata baseLevel int л                               internalFormatBits wrapModes padding intBorderColor int4 ллл                            h          4       G       Q       Y  p            Ф                  ё  Microsoft (R) HLSL Shader Compiler 10.1 ISGND         8                    8                  TEXCOORD лллOSGNh         P                    \                   \ 